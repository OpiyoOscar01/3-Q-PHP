<?php

class SuperClass
{
    function __construct()
    {
        echo "I am super class<br>";
    }
}

class SubClass extends SuperClass
{
    function __construct()
    {
        parent::__construct();
        echo "I am sub class<br>";
    }
}

$obj = new SubClass();
$obj = new SuperClass();


?>