<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();


unset($_COOKIE["ID"]);


header("location: ../index.php?logout");
exit;
?>

