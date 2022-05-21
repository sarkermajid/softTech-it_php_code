<?php 
    $a = 5;

    while($a < 10){
        echo $a ."<br>";
        $a++;
    }
?>
<br>
<?php 
    $b = 1;
    while($b > -34){
        echo $b . "<br>";
        $b--;
    }
?>
<br>
<?php 

    $c = 5;
    do{
        echo $c;
        $c++;
    }while($c < 10);

?>
<br>
<?php 

    for($d=2;$d<=10;$d++){
        echo $d;
    }

?>
<br>
<?php 

    $more = array("sarker majid","Sohan khan","Tareq ul alom");
    foreach($more as $singular){
        echo $singular . "<br>";
    }

    // onk gula value thake array te... foreach er kaj holo arrayr vitor er onk gula value thake ber kore sob single kore dey.

?>