
<?php 
    
    $first = isset($_GET["first_name"]) ? $_GET["first_name"] : NULL;
    $last = isset($_GET["last_name"]) ? $_GET["last_name"] : NULL;
    $email = isset($_GET["email"]) ? $_GET["email"] : NULL;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>part 13</title>
</head>
<body>

    <form action="form.php" method="GET">
        <input type="text" name="first_name" placeholder="First Name">
        <input type="text" name="last_name" placeholder="Lase Name">
        <input type="email" name="email" placeholder="Email Address">
        <input type="submit" name="submit" value="Submit">
    </form>


    <h3>FIRST NAME : <?php echo $first ?> </h3><br>
    <h3>LAST NAME : <?php echo $last ?> </h3><br>
    <h3>EMAIL : <?php echo $email ?> </h3><br>

</body>
</html>