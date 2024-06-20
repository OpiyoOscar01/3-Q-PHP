<?php
class GFG{
    static function someFunction(){
        echo "Hello World!";
    }
}

class Article extends GFG{
    // Overriding the parent's someFunction
    static function someFunction(){
        echo "Hello World! I am from the article";
    }

    // Adding a new static function to call the parent's someFunction
    static function callParentFunction(){
        // Correct way to call a parent's static method
        parent::someFunction();
    }
}

// Calling the overridden function in the Article class
call_user_func(['Article','someFunction']);

// Calling the parent's someFunction using a correct approach
call_user_func(['Article','callParentFunction']);
?>
