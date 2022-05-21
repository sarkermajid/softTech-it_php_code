<?php 

    session_start();

    if(isset($_SESSION["success"])){
        header("location: adminp1.php");
    }

    if(isset($_POST["info_submit"])){


        define("EMAIL","adminp1@gmail.com");
        define("PASSWORD","123");

        $email = $_POST["email"];
        $password = $_POST["password"];

        if($email == EMAIL && $password == PASSWORD){

            $_SESSION["success"] = "";

            header("location: adminp1.php");
        }else{

            $fail = "Password does not match";

        }

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        <input type="email" name="email" placeholder="Email" required> <br><br>
        <input type="password" name="password" placeholder="Password" required> <br><br>
        <input type="submit" name="info_submit" value="Submit">
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