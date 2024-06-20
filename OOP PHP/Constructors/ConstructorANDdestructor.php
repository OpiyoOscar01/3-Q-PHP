<?php
class Person {
    public $name;
    public $age;

    // Constructor
    function __construct($name, $age) {
        $this->name = $name;
        $this->age=$age;
        echo "Person created: " . $this->name . "\n";
    }

    // Destructor
    function __destruct() {
        echo "Person destroyed: " . $this->name . "\n";
    }
}

// Creating a new Person object
$person = new Person("John Doe", 30);

// The destructor is called automatically when the script ends or the object is no longer referenced.
?>
