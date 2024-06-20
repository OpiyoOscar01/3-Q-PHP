<?php
class Vehicle {
    public $make;
    public $model;

    // Constructor of the superclass
    function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
        echo "Vehicle created: " . $this->make . " " . $this->model . "\n";
    }
}

class Car extends Vehicle {
    public $color; // Additional attribute

    // Constructor of the derived class
    function __construct($make, $model, $color) {
        parent::__construct($make, $model); // Calling the constructor of the superclass
        $this->color = $color;
        echo "Car created: " . $this->make . " " . $this->model . " in " . $this->color . "\n";
    }
}

// Creating a new Car object, which is a derived class of Vehicle
$car = new Car("Toyota", "Corolla", "red");
?>
<?php
