<?php 

class Person{
    public $name = "Md Majidur Rahman Sarker"."<br>";
    public $username = "sarker_majid"."<br>";
    public $password = 12345 ."<br>";

    public function login(){
        return "Login this Profile.......";
    }
}

$information = new Person();
echo "Full Name :". $information->name;
echo "Username :" .$information->username;
echo "Password :". $information->password;
echo "Status :" . $information->login();

?>