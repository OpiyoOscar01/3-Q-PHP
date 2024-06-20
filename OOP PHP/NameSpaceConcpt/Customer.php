<?php
namespace App\Model\Customer;
class Customer{
    private $firstName;
    function __construct($firstName){
        $this->firstName = $firstName;
    }
    function getFirstName(){
        return $this->firstName;
    }
}