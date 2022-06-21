<?php 
include 'config.php';
 
$username = $_POST['wallet'];
$password = md5($_POST['password']);
 
$login = mysql_query("select * from user where username='$wallet' and password='$password'");
$cek = mysql_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $wallet;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}else{
	header("location:index.php");	
}
 
?>