<?php

class Tree{
           function Tree(){
               echo "This is a user defined constructor.";
           }
           function __construct(){
               echo "This is a Pre-defined constructor.";
           }
}
$obj1=new Tree();






?>