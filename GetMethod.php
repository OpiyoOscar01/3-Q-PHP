<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="
background-color: cyan">
<form action=" <?php
echo htmlspecialchars($_SERVER['PHP_SELF']);
?> " method="GET">
    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="enter your name..."> <br>
    <label for="city">City:</label>
    <input type="text" name="city" placeholder="enter your city..."> <br>
    <p> <?php
         if(isset($errorMessage)) { echo $errorMessage; } ?>    ?> </p>
    
    <button type="submit">Submit</button>
    <br>
</form>
<?php
$name = $_GET['name'];
$city = $_GET['city'];
echo "<p>This is ".$name." of ".$city."</p><br>";
var_dump($_GET);
if(empty($name) && empty($city)){
    $errorMessage= "Please enter your name and a city!";
}

?>
