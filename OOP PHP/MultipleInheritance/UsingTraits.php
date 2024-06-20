<?php
class main{
    function mainFunc(){
        print "The order is from the main function"."<br>";
    }
}
trait num1{
    function trait1Func(){
        print "This order is from Trait number 1"."<br>";
    }
}trait num2{
    function trait2Func(){
        print "This order is from Trait number 2"."<br>";
    }
}

class sub extends main{
    use num1;
    use num2;
    function subFunc(){
        print "The order is from the sub function"."<br>";
    }

}

 $grandChild= new sub();
$grandChild->mainFunc();
$grandChild->trait1Func();
$grandChild->trait2Func();
$grandChild->subFunc();




?>