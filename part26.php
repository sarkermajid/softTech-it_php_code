<?php 

 
$something = array("one","two","three","four","five","six","seven");

echo end($something);

print_r(array_chunk($something,2));
echo count($something)."<br>";

$name = array("sohan","majid","tareq");
$age = array(22,24,24);

$result = array_combine($name,$age);
print_r($result);

$a = array("ami","tumi","amra");
array_pop($a);
print_r($a);
array_push($a,"asi","nai","khali");
print_r($a);

$b = array(
    "majid"=>"web developer",
    "tanvir"=>"facebok marketer",
    "sohan"=>"graphics designer",
    "srabon"=>"Ecommerce-marketer",
    "iqbal"=> "programmer"
);

print_r(array_rand($b,4));

$x = array("one","two","three","four");
$y = array("10","20");
print_r(array_replace($x,$y));

$t = array("one","two","three","four","one","two","five");
print_r(array_unique($t));

$sarker = array(
    "one"=>"ami",
    "two"=> "tumi",
    "three"=> "amra",
    "four"=>"tomara",
    "five"=>"sobai"
);
extract($sarker);
echo $two;
echo $five;



?>