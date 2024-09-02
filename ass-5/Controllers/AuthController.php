<?php 

require_once 'Models/User.php';

class AuthController
{
    private $db;
    private $user;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->user =  new User($this->db);
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $this->user->name = $_POST['name'];
            $this->user->email = $_POST['email'];
            $this->user->password = $_POST['password'];
            $this->user->user_type = $_POST['user_type'];
            
            if ($this->user->register())
            {
                header("Location: login.php");
            }
            else
            {
                echo "Registration Failed";
            }
        }
    }

    public function login()
    {
       
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $this->user->email = $_POST['email'];
            $this->user->password = $_POST['password'];
            if ($this->user->login())
            {
                header("Location: view/admin/customers.php");
            }
        }
    }


    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header("Location: login.php");

    }

}

?>