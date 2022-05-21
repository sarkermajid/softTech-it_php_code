<?php 

class person{
    public $username;
    const MINCHAR2 = 8;
    public $password;
    const MINCHAR = 10;


    public function set_username($user_value){
        if(strlen($user_value) < self::MINCHAR2){
            throw new Exception("username requires minimum ".self::MINCHAR2."characters.");
        }else{
            $this->username=hash("sha256",$user_value);
        }
    }

    public function set_password($pass_value){
        if( strlen($pass_value) < self::MINCHAR){
          throw new Exception ("password requires minimum". self::MINCHAR." characters.");
        }else{
            $this->password=hash("md5",$pass_value);
        }
    }
}

$information = new person();
$information->set_password("1234567jdfngejo");
$information->set_username("sarkermajid");
echo $information->password ."<br>";
echo $information->username;

?>