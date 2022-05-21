<?php 

    session_start();

    if(!isset($_SESSION["success"])){
        header("location: indexp1.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
</head>
<body>
    <h1>Welcome to the admin panel</h1>

    <br><br>

    <a href="logoutp1.php">Logout</a>
</body>
</html>