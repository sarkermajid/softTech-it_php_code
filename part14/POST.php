
<?php 
    
    $first = isset($_POST["first_name"]) ? $_POST["first_name"] : NULL;
    $last = isset($_POST["last_name"]) ? $_POST["last_name"] : NULL;
    $email = isset($_POST["email"]) ? $_POST["email"] : NULL;

    if(isset($_POST["info_submit"])){
        $success = "The Form has been submited";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>part 14</title>
</head>
<body>

    <form action="" method="POST">
        <input type="text" name="first_name" placeholder="First Name">
        <input type="text" name="last_name" placeholder="Lase Name">
        <input type="email" name="email" placeholder="Email Address">
        <input type="submit" name="info_submit" value="Submit">
    </form>

    <br>
        <?php 

            if(isset($success)){
                echo "<p>".$success."</p>";
            }
        
        ?>
    <br>

    <h3>FIRST NAME : <?php echo $first ?> </h3><br>
    <h3>LAST NAME : <?php echo $last ?> </h3><br>
    <h3>EMAIL : <?php echo $email ?> </h3><br>

</body>
</html>