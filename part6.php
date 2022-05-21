<?php 

    function nagoriksomoy24(){
        echo "Hi,Sarker Majid";
    };

    nagoriksomoy24();

    function title(){
        echo "This is our website";
    }

    function headline(){
        echo "Website headline";
    }

    function content(){
        echo "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum, mollitia.";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php title() ?> </title>
</head>
<body>
    <h1><?php headline() ?></h1>

    <p><?php content() ?></p>
    <br><br><br>
</body>
</html>

<?php 

    function profession($consonent="a",$podobi="doctor"){
        echo "I am $consonent $podobi";
    }

    profession("an","engineer"); // adike argument pass kora hoy // function er vitor parameter pass kora hoy
?>