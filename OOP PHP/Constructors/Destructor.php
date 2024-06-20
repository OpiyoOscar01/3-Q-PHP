<?php
class SomeClass
{
    public $name; // It's good practice to declare properties

    function __construct()
    {
        echo "In constructor, ";
        $this->name = "Class object! ";
    }

    function __destruct()
    {
        echo "destroying " . $this->name . "\n";
    }
}

// Use the same case as the class definition for clarity and consistency
$obj = new SomeClass();
?>
