<?php 

    if(file_exists(dirname(__FILE__).'/config.php')){
        require_once(dirname(__FILE__).'/config.php');
    }

    if(isset($_POST['register'])){

        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $email = $_POST['email_address'];
        $password = $_POST['password'];

        $error = array();

        if($fname == null){
            $error['fname'] = "First Name is Blank";
        }

        if($lname == null){
            $error['lname'] = "Last Name is Blank";
        }

        if($email == null){
            $error['email'] = "Email Address is Blank";
        }

        if($password == null){
            $error['password'] = "Password is Blank";
        }
        elseif(strlen($password) <= 6){
            $error['password'] = "Password must be more than 6 charactrr long";
        }

        if(count($error) == 0){
            $query = mysqli_query($connection,"insert into users(first_name,last_name,email_address,password) values ('$fname','$lname','$email','$password')");


            if($query){
                $success = "You Have Been Registered";
            }
        }

    }

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    <h1 class="display-1 bg-dark text-center text-info py-3 mb-5">Registration Form</h1>
    <div class="containe">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
            <form action="" method="POST">
                <div class="error">
                    <?php 
                        if(isset($error['fname'])){
                            echo $error['fname'];
                        }
                    ?>
                </div>
                <label for="first_name"><h5>First Name:</h5> </label>
                <input class="form-control form-control-lg" type="text" name="first_name" id="first_name"> <br><br>
                
                <div class="error">
                    <?php 
                        if(isset($error['lname'])){
                            echo $error['lname'];
                        }
                    ?>
                </div>
                <label for="last_name"><h5>Last Name:</h5> </label>
                <input class="form-control form-control-lg" type="text" name="last_name" id="last_name"> <br><br>
                
                <div class="error">
                    <?php 
                        if(isset($error['email'])){
                            echo $error['email'];
                        }
                    ?>
                </div>
                <label for="email_address"><h5>E-mail Address:</h5> </label>
                <input class="form-control form-control-lg" type="email" name="email_address" id="email_address"> <br><br>
                
                <div class="error">
                    <?php 
                        if(isset($error['password'])){
                            echo $error['password'];
                        }
                    ?>
                </div>
                <label for="password"><h5>Password:</h5> </label>
                <input class="form-control form-control-lg" type="password" name="password" id="password"> <br><br>

                <input class="btn btn-success btn-lg w-100" type="submit" name="register" value="Register">
            </form>
            <div class="success">
                <?php 
                    if(isset($success)){
                        echo $success."Please <a href='login.php'>Login</a>";
                    }
                ?>
            </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</body>
</html>