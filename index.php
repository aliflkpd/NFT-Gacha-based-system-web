<!DOCTYPE html>
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
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Wallet account:</label>
				<input type="text" name="" id="Wallet" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>
</body>
 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("Wallet").value;
		var password = document.getElementById("password").value;		
		if (Wallet != "" && password!="") {
			return true;
		}else{
			alert('Wallet and password is invalid!');
			return false;
		}
	}
 
</script>
</html>