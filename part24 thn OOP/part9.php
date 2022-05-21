<?php 

class person{

    public $username = "sarkermajid";

}

$one = new person();

$two = clone $one;

$two->username="majidursarker";

print_r($one);
print_r($two);

?>