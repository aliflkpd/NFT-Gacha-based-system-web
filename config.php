<?php
$servername = "localhost";
$username = "root"; // sesuaikan dengan username db masing-masing
$password = ""; // sesuaikan dengan password db masing-masing
$db = "tb_user"; // sesuaikan dengan password db masing-masing
 
// Create connection
$conn = new mysqli($servername, $username, $password, $db);
 
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
?>