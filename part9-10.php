<?php 

    $details = array(
        "Name" => "Sarker Majid",
        "Profession" => "Web Developer",
        "Skill" => "Html,css,js,php,mysql"
    );
    echo $details["Name"]."<br>";
    echo $details["Profession"]."<br>";
    echo $details["Skill"]."<br>";

    var_dump($details); // describe & data type find.
    print_r($details);// use descrbe for only array.
    
    $type = gettype($details); // use dor find data type. variable dia return er man rakhte hoy.

    if($type == "array"){
        echo "This is array.";
    }

    $a = "sarkar majid";
    echo strlen($a);
?>