<?php 
include '../config.php';
 
session_start();
 

if($_SESSION['status'] !="login"){
	header("location:../index.php");
}
 

echo " Welcome ". $_SESSION['username'];
 
?>
<br/>
<br/>
<a href="logout.php">LOGOUT</a>