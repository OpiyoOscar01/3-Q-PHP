<?php
// 1. Creation of session
session_start();

// 2. Storing session data
$_SESSION['username'] = 'JohnDoe'; // Storing a username

// 3. Accessing session data
echo 'Welcome, ' . $_SESSION['username']; // Accessing the stored username

// 4. Partially destroying session data
unset($_SESSION['username']); // Removing specific session data

// 5. Completely destroying session data
session_destroy(); // Destroying all session data
?>
