<?php
$mysqli = new mysqli("localhost", "phpmyadmin", "@Magicworld2001", "crud");
if ($mysqli->connect_errno) {
    die("Connection failed: " . $mysqli->connect_error);
}
$result = $mysqli->query("SELECT * FROM user");
while ($row = $result->fetch_assoc()) {
    print_r($row);
}
$mysqli->close();
