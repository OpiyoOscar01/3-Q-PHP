<?php

use App\Model\Customer\Customer;


require "D:/Programs/Xamp/htdocs/AdvancedPHP/OOP PHP/NameSpaceConcpt/Customer.php";
$obj = new Customer("Johns");
echo "".$obj->getFirstName();
