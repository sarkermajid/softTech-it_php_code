<?php 

    $a = "Sarker Majid";
    $b = 24;
    $c = 21;
    $d = "Dhaka";

    printf("My name is %s . my age is %d . my birth date is %d . I live in %s. ",$a,$b,$c,$d);
    // printf direct print hoye jay. jodi sprintf use kori tahole return korbe tokon seta ke echo krte parbo othoba variale a rekhe echo krte parbo. jemon ====>>>

    $details =printf("my name is %s . i %d years old . my birth date is %d and i live in %s",$a,$b,$c,$d);

    echo $details;
?>