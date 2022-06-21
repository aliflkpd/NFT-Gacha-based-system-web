<?php
session_start();
require "config.php";
if(isset($_POST['Wallet'])) {
    $login = false;
    $userLogin;
    $query = $conn->query("
        select*from user where 
            Wallet='".$_POST['Wallet']);
    while($user = $query->fetch_array()) {
        if(password_verify($_POST['password'], $user['password'])) {
            $login = true;
            $userLogin = $user;
        }
    }
    print_r($user);
    if($login) {
        $_SESSION['Wallet'] = $wallet;
        $_SESSION['status'] = 'login';
        header("Location: http://localhost/kuliah");
    } else {
        echo "Wallet or password is invalid!";
    }
}

if(isset($_GET['logout'])) {
    session_destroy();
    header("Location: http://localhost/kuliah");
}
?>