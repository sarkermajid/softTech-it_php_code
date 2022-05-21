<?php 

class person{
    static $name = "majidur";

    static function email(){
        return "majidursarkar333@gmail.com";
    }
}

echo person::$name . "<br>";
echo person::email();
?>