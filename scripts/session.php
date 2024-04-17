<?php
// Initialize the session

session_start();
 


  if($_COOKIE["ID"] != 'null')
  {
		$_SESSION['ID'] = $_COOKIE["ID"];          
		$_SESSION['name'] = $_COOKIE["name"];
		$_SESSION['username'] = $_COOKIE["username"];
		$_SESSION['role'] = $_COOKIE["role"];
  }
  else
if(!isset($_SESSION['username']) || !isset($_SESSION['master']))
{
  header("location: index.php");
  exit;
}
else
{
		$_SESSION['ID'] = $_COOKIE["ID"];          
		$_SESSION['name'] = $_COOKIE["name"];
		$_SESSION['username'] = $_COOKIE["username"];
		$_SESSION['role'] = $_COOKIE["role"];
}

?>
