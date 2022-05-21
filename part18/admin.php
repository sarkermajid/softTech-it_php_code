<?php 

    session_start();

    include("function.php");

   if(!user_logged_in()){
        header("location: login.php");
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <h1>Welcome to the Admin Panel</h1>
    <br><br>

    <a href="logout.php">Logout</a>
</body>
</html>