<?php

// PHP program to illustrate working
// of a closure callback

// Closure to print a string
$print_function = function($string) {
    echo $string."<br>";
};

// Array of strings
$string_array = ["Geeksforgeeks", "GFG", "Article"];

// Callable closure
array_map($print_function, $string_array);

?>
