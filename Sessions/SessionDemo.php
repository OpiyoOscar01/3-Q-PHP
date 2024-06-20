<?php
//Starting session
session_start();
//storing data in session global variable
$_SESSION['id'] = 2;
$_SESSION['name'] = 'John Doe';
$_SESSION['email'] = 'john@doe.com';
//accessing the session data.
$info="The session id is ".$_SESSION['id']." and the name is ".$_SESSION['name']." and the email is ".$_SESSION['email']."<br>";
echo $info;
//partially destroying session values
unset($_SESSION["email"]);
$info1="The session id is ".$_SESSION['id']." and the name is ".$_SESSION['name']."<br>";

echo $info1;

session_destroy();








?>