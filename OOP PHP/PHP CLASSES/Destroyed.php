<?php

class Destroyed
{
   public function __destruct(){
       echo "The class ".__CLASS__." has been destroyed<br>";
   }
}
$obj1 = new Destroyed();