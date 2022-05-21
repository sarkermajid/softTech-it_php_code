<?php 

    if(isset($_POST["contact"])){
        $warning = array();

        $first_name = $_POST['fname'];
        $last_name = $_POST["lname"];
        $email = $_POST['email'];

        $message ="Firstname :". $_POST["fname"]. "<br>";
        $message .="Lastname :". $_POST["lname"]. "<br>";
        $message .="Email Address :". $_POST["email"]. "<br>";
        $message .="Message :". $_POST["msg"]. "<br>";
        
        $to = "majidursarkar333@gmail.com";
        $subject = "You Got a new messege";
        
        $headers = "Form : $email \r\n";
        $headers = "content-type: text/html";

        if($first_name == null){
            $error["fname"] = "Firstname is missing";
        }
        if($last_name == null){
            $error['lname'] = "Lastname is missing";
        }
        if($email == null){
            $error['email'] = "Email is missing";
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error['emailfilter'] = "Email is not valid";
        }
        if($message == null){
            $error['msg'] = "Message is required";
        }

        if(count($error) == 0){
            mail($to,$subject,$message,$headers);
            $success = "Successfully Submited.";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>

    <form action="" method="POST">
        <input type="text" name="fname" placeholder="First Name"><br>
        <p>
            <?php
                if(isset($error['fname'])){
                    echo $error['fname'];
                }
            ?>
        </p>
        <input type="text" name="lname" placeholder="Last Name"><br>
        <p>
            <?php 
                if(isset($error['lname'])){
                    echo $error['lname'];
                }
            ?>
        </p>
        <input type="email" name="email" placeholder="Email Address"><br>
        <p>
            <?php 
                if(isset($error['email'])){
                    echo $error['email'];
                }
            ?>
        </p>
        <textarea name="msg" id="" cols="30" rows="10"></textarea><br>
        <p>
            <?php 
                if(isset($error['msg'])){
                    echo $error['msg'];
                }
            ?>
        </p>

        <input type="submit" value="Submit" name="contact"><br>
        <p>
            <?php 
                if(isset($success)){
                    echo $success;
                }
            ?>
        </p>
    </form>

</body>
</html>