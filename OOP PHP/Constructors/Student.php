<?php

class Student
{
    public $name;
    public $age;
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function studentDetails(){
        return "Hello $this->name!"."You are $this->age years old.";
    }
}
$student1 = new Student("John", "45");
$student2 = new Student("Oscar", "23");
echo $student1->studentDetails();
echo $student2->studentDetails();