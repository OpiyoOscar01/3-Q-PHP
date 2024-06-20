<?php

class main1{
    function mainMessage(){
        echo "Hello World!"."<br>";
    }
}
interface num_1{
    function int_1();
}
interface num_2{
    function int_2();
}

class sub1 extends main1 implements num_1 ,num_2 {

    function int_1()
    {
echo "I am from interface 1"."<br>";
    }

    function int_2()
    {
        echo "I am from interface 2"."<br>";
    }
    function subFunc(){
         echo "I am from the main function"."<br>";
    }
}

$obj = new sub1();
$obj->mainMessage();
$obj->int_1();
$obj->int_2();
$obj->subFunc();