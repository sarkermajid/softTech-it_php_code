<?php 

    session_start();


    if(isset($_SESSION["success"])){
        header("location: admin.php");
    }

    if(isset($_POST["login"])){

        define("EMAIL","admin@gmail.com");
        define("PASSWORD","12345");

        $email = $_POST["email"];
        $password = $_POST["password"];

        if($email == EMAIL && $password == PASSWORD){
            $_SESSION["success"] = "";

            header("location: admin.php");

        }else{
            $fail ="Password doesn't match";
        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>part 15</title>
</head>
<body>
    <form action="" method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="password" required>
        <input type="submit" name="login" value="Login">
    </form>

    <p>
    <?php 
    
        if(isset($fail)){
            echo $fail;
        }
    
    ?>
    </p>

</body>
</html>