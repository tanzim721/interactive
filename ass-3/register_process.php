<?php

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $name = htmlspecialchars(  $_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $confirm_password = password_hash($_POST['confirm_password'], PASSWORD_BCRYPT);

        $data = ['name'=>$name, 'email'=>$email, 'password'=>$password, 'confirm_password'=>$confirm_password];

        $file = 'users.json';

        if(file_exists($file)){
            $users = json_decode(file_get_contents($file), true);
        }
        else{
            $users = [];
        }

        foreach($users as $user){
            if($user['name'] = $name ){
                echo "User Already Exist";
                exit();
            }
        }

        $users[] = $data;

        file_put_contents($file, json_encode($users));
        echo "Registration Successful";
    }
