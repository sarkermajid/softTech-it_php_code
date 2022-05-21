<?php 

    session_start();

    if(!isset($_SESSION["success"])){
        header("location: index.php");
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>

    <h1>Welcome to Admin Panel</h1>

    <br>

    <a href="logout.php">Logout</a>
    
</body>
</html>