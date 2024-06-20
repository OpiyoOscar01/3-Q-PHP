<?php
class Person {
    public $name;
    public $age;

    // Simulating constructor overloading with default values
    function __construct($name = null, $age = null) {
        if ($name !== null && $age !== null) {
            $this->name = $name;
            $this->age = $age;
            echo "Person created with name and age: " . $this->name . ", " . $this->age . "\n";
        } elseif ($name !== null) {
            $this->name = $name;
            echo "Person created with name only: " . $this->name . "\n";
        } else {
            echo "Person created with no details.\n";
        }
    }
}

// Creating Person objects with different constructor arguments
$person1 = new Person("John Doe", 30);
$person2 = new Person("Jane Doe");
$person3 = new Person();
?>
