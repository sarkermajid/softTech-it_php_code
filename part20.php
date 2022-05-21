<?php 

$email = "majidursarker333@gmail.com";

if(filter_var("$email",FILTER_VALIDATE_EMAIL)){
    echo "Email id is valid";
}else{
    echo "Email id is not valid";
}

?>