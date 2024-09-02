<?php 

require_once 'config/database.php';

class User
{
    private $conn;
    private $table_name = "users";

    public $id; 
    public $name;
    public $email;
    public $password;
    public $user_type;

    public function __construct($db)
    {
        $this->conn = $db;
    }
    public function register()
    {
        $query = "INSERT INTO " . $this->table_name . " SET name=:name, email=:email, password=:password, user_type=:user_type";
        $stmt = $this->conn->prepare($query);

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));
        $this->user_type = htmlspecialchars(strip_tags($this->user_type));

        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", password_hash($this->password, PASSWORD_BCRYPT));
        $stmt->bindParam(":user_type", $this->user_type);
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    public function login()
    {
        $query = "SELECT * FROM " . $this->table_name . " WHERE email=:email AND password=:password";
        $stmt = $this->conn->prepare($query);
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);
        if($stmt->execute()){
            return true;
        }
        return false;
    }
}

?>