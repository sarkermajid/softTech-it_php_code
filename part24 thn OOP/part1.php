<?php 

class person{
    public $username = "sarkermajid";
    public $password = "12345";
}
$Id_information = new person();
echo $Id_information->username;
echo $Id_information->password."<br>";

class AnotherPerson{
    public $Username;
    public $Password;
}

$Another_id_information = new AnotherPerson();

$Another_id_information->Username = "sarker_majid";
$Another_id_information->Password = "123321";

echo $Another_id_information->Username;
echo $Another_id_information->Password;

?>