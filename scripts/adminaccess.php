<?php
// Initialize the session


 
// If session variable is not set it will redirect to login page
if($_SESSION['role'] != 1){
  header("location: empdashboard");
}


?>
