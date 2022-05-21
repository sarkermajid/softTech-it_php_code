<?php 

    $a = "Sarker Majid";

    function name(){
        global $a;
        return $a;
    }

    echo name();


?>
<br>
<?php 

    $c = "CSE";

    function study(){
        
        echo $GLOBALS["c"];
    }

    study();


?>
<br>
<?php 

    function profession(){

        global $b;
        $b = "Full stack Web developer";

    }

    profession();
    echo $b;


?>