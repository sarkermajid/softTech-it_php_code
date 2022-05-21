
<?php 
    
    $first = isset($_REQUEST["first_name"]) ? $_REQUEST["first_name"] : NULL;
    $last = isset($_REQUEST["last_name"]) ? $_REQUEST["last_name"] : NULL;
    $email = isset($_REQUEST["email"]) ? $_REQUEST["email"] : NULL;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>part 13</title>
</head>
<body>

    <!-- get / post jvabe e dey kaj korbe.-->
    
    <form action="" method="GET"> 
        <input type="text" name="first_name" placeholder="First Name">
        <input type="text" name="last_name" placeholder="Lase Name">
        <input type="email" name="email" placeholder="Email Address">
        <input type="submit" name="info_submit" value="Submit">
    </form>


    <h3>FIRST NAME : <?php echo $first ?> </h3><br>
    <h3>LAST NAME : <?php echo $last ?> </h3><br>
    <h3>EMAIL : <?php echo $email ?> </h3><br>

</body>
</html>