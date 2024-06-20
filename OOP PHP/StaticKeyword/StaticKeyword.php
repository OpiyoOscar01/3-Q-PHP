<?php
class student{
    private $name;
    public static $year=2023;
    static public function course(){
       return "Software Engineering<br>";
    }
}

    $obj=new student;
 echo "You enrolled for ".$obj::course()."in the year".$obj::$year;