<?php 

class person{

    private $name = "sarker Majid";

    public function NAME(){
        return $this->name;
    }
}

$person_details = new person();
echo $person_details->NAME();

// Private hole vitore method create kore this use kore call koraite hoy noyto kaj kore na. r privsate
// bahire call korele kaj kore na tai ai vabe kora lage.
?>