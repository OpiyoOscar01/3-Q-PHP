<?php
abstract class Animal{
    public $name;
    function __construct($name){
        $this->name = $name;
    }
    abstract function doSomething();
    function owner()
    {
     echo "My name is " . $this->name ." ,and I am the owner of this farm.". "<br>";
    }
}
 class  Bird extends Animal{
     function doSomething()
     {
         echo "For us birds also belong to the animal kingdom.";
     }
 }
 $obj=new Bird("Johns");
$obj->owner();
$obj->doSomething();