<?php 

class first{

    protected function one(){
        return "This is function one";
    }
}

$object1 = new first;

class secound extends first{

    public function two(){
        return $this->one();
    }
}

$object2 = new secound;
echo $object2->two();

?>