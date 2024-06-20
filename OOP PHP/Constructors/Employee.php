<?php
 //Implementing the concept of parametized constructor here.
class Employee
{
    public $name;
    public $Profile;
    public function __construct($name, $profile){
        $this->name = $name;
        $this->Profile = $profile;
    }
    function nameProfile(){
        echo $this->name.":"."Your role is:".$this->Profile."<br>";
    }
}
$employee1=new Employee("John Doe","Developer");
$employee1->nameProfile();
$employee2=new Employee("Mike Steve","Designer");
$employee2->nameProfile();
