<?php

require_once('config.php');

session_start();

if (isset($_POST['logout'])) {
    session_destroy();
    header("location: login.php");
}
if(empty($_SESSION['email'])) {
    header("location: login.php");
}
else{
    $email = $_SESSION['email'];
    $return = user_info($email);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Welcome </h1>
        </header>
        <div class="user_info">
            <p>
                Username: <?php echo $return['username']; ?><br>
                Email: <?php echo $return['email']; ?><br>
            </p>
        </div>
        <form action="" method="post" id="logout">
            <div class="form-group">
                <button type="submit" name="logout" id="submit" class="submit-logout">
                    <h2>Logout</h2>
                </button>
            </div>
        </form>
    </div>
</body>