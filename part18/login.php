<?php 

    session_start();

    include("function.php");

    if(user_logged_in()){
        header("location: admin.php");
    }

    if(isset($_POST["submit"])){

        $username = $_POST["username"];
        $password = $_POST["password"];

        $keep = isset($_POST["keep"]);

        define("USERNAME","sarkermajid");
        define("PASSWORD","12345");

        if($username == USERNAME && $password == PASSWORD){

            setcookie("success", $keep , time() + 60*60*24*365);

            $_SESSION["success"] = "";

            header("location: admin.php");
        }else{
            $error = "Username or Password incorrect";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
</head>
<body>
    
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="checkbox" name="keep" id="keep">
        <label for="keep">Keep Me Logged in</label><br><br>

        <input type="submit" name="submit" value="Login">

    </form>

    <?php 
    
        if(isset($error)){
            echo $error;
        }
    
    ?>


</body>
</html>