<?php
session_start();
require "config.php";
if(isset($_POST['WalletID'])) {
    $login = false;
    $userLogin;
    $query = $conn->query("
        select*from user where 
            WalletID='".$_POST['WalletID']);
    while($user = $query->fetch_array()) {
        if(password_verify($_POST['password'], $user['password'])) {
            $login = true;
            $userLogin = $user;
        }
    }
    print_r($user);
    if($login) {
        $_SESSION['akses'] = 'admin';
        $_SESSION['name'] = 'alif lakipadada';
        $_SESSION['WalletID'] = $userLogin['WalletID'];
    } else {
        echo "Wallet or Password is invalid!";
    }
}

if(isset($_GET['logout'])) {
    session_destroy();
    header("Location: http://localhost/kuliah");
}
?>
<!doctype html>
<html>
    <head>
    <title>Baby domination NFT</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
    <br/>
    <br/>
    <br/>
    <div class="login">
    <br/>
    <form action="login.php" method="post">
        <div>
        <label>Wallet ID:</label>
        <input type="text" name="Wallet" id="Wallet" />
        </div>
        <div>
        <label>Password:</label>
        <input type="password" name="Password" id="Password" />
        </div>
         <div>
            <input type="submit" value="Login" class="tombol">
        </div>
    </div>
    </form>
</body>
