<?php 
include 'config.php';
 
$wallet = $_POST['wallet'];
$password = md5($_POST['password']);
 
$login = mysql_query("select * from user where wallet='$wallet' and password='$password'");
$cek = mysql_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['wallet'] = $wallet;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}else{
	header("location:index.php");	
}
 
?>