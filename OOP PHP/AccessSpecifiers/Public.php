<?php

class Base{
    public $x=8;
    public $y=4;
    function add(){
        return $this->x+$this->y;
    }
}
class Derived extends Base {
    function subtract(){
        return $this->x - $this->y;
    }
}

 $obj = new Derived();
echo $obj->subtract();
$obj2=new Base();
echo $obj2->add();




?>