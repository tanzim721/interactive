<?php 
    session_start();

    if(isset($_SESSION['name'])) {
        header('Location: login.php');
        exit();
    }
    $name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymous Feedback App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <h2>Welcome, <?php echo htmlspecialchars($name); ?></h2>

    <p>You are logged in. </p>
    <p><a href="logout.php">Logout</a></p>

</body>
</html>