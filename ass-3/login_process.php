<?php 

    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $password = $_POST['password'];
        
        $file = 'users.json';

        if(file_exists($file)){
            $users = json_decode(file_get_contents($file), true);
        }
        else{
            echo "No user registration on this server";
            exit();
        }

        foreach($users as $user){
            if($user['name'] == $name && password_verify($password, $user['password'])){
                $_SESSION['name'] = $name;
                header('Location: index.php');
                exit();
            }
        }
        echo "Wrong username or password";


    }