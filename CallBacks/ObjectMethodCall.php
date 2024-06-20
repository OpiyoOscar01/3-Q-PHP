<?php

// PHP program to illustrate working
// of a object method callback

// Sample class
class GFG {

    // Function to print a string
    static function someFunction() {
        echo "Geeksforgeeks \n";
    }

    // Function used to print a string
    public function __invoke() {
        echo "invoke Geeksforgeeks \n";
    }
}

// Class object
$obj = new GFG();

// Object method call
call_user_func([$obj, 'someFunction']);

// Callable __invoke method object
call_user_func($obj);

?>
