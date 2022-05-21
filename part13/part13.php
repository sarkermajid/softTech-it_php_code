<?php 
  

    $something = array("name" => "sarker majid");

    print_r($something);

    $something1["nam"] = "majidur sarker";

    print_r($something1);

    // 2 tai array 2 vabe kora jay... array kina seta test korar jonno print_r() function use  kora hoy.


      // superglobal variable.

    print_r($_GET);
    $_GET["NAME"] = "sARKER mAJID";
    print_r($_GET);


    $_GET["myname"];
    print_r($_GET);

    // myname er value set kori nai tai index error show korbe eta 3vabe solve kora hbe 1. link er maddome jeon uprer link a myname=majid prblm solve hobe show korbe 2 number solve dea holo niche.

    if(isset($_GET["myname"])){
        echo $_GET["myname"];
    }
    else{
        echo " ";
    }

    // arekta way shorthand statement.

    $MYNAME = isset ($_GET["myname"]) ? $_GET["myname"] : NULL;

?>
