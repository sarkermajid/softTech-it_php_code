<?php 

$information = new stdClass();
$information->username="sarkermajid";
echo $information->username ."<br>";

?>

<?php 

$something = new stdClass();
$something->username="majidur";

class person2{
    public $username2 = "majidursarker";
    public $password2 = "12345";

    public function function2(){
        global $something;
        return $something->username;
    }
}

$class2 = new person2();

echo $class2->function2();

?>
