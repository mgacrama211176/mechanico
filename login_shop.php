<?php

$is_invalid = false;
if ($_SERVER["REQUEST_METHOD"] === "POST"){
	
	$mysqli = require __DIR__ . "/database.php";

	$sql = sprintf("SELECT * FROM autoshop WHERE username = '%s'", 
			$mysqli->real_escape_string($_POST["username"]));

	$result = $mysqli->query($sql);

	$user = $result->fetch_assoc();
 
	if ($user) {

		if (password_verify($_POST["password"], $user["password_hash"])){
			header("Location: dashboard_shop.html");
		}
	}
	$is_invalid = true;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<title>Log in</title>
</head>
<style>
	*{
			font-family: 'Red Hat Display', sans-serif;
		}
	form{
			position: absolute;
			margin-top: 25%;
			left: 22%;
			-webkit-transform: translate(-50%, -50%);
			-moz-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			-o-transform: translate(-25%, -50%);
			transform: translate(-50%, -50%);
			width: 38%;
			height: 100%;
			padding: 50px 40px;
			background: #096E81;
			margin-left: -3%;
	}
	h1{
		color: white;
		text-align: center;
		margin-bottom: 5%;
		font-size: 64px;
		font-weight: 700;
		line-height: 40px;
	}
	h2{
		font-size: 48px;
		padding-top: 5%;
		color: white;
		text-align: center;
		font-weight: 80;
	}
	label{
		color: #004B59;
		font-size: 24px;
		font-weight: 80;
	}
	input {
		width: 90%;
		height: 1vh;
		padding: 15px;
		margin: 5px 0 22px 0;
		display: inline-block;
		border: none;
		background: #C3E5EB;
		border-radius: 10px;

	}
	.login button{
		color: #14AFCC;
 		font-size: 30px;
		padding: 10px 22px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 30%;
		opacity: 0.9;
		margin-left: 35%;
		text-decoration: none;
	}
	.login {
		font-weight: 300;
	}
	.containersignin p{
		color: #004B59;
		font-size: 20px;
		font-weight: 80;
	}
	.containersignin a{
		color: #14AFCC;
		text-decoration: none;
		font-size: 20px;
		font-weight: 80;
	}
	body {
		background-image: url('pic.png');
		background-repeat: no-repeat;
		background-attachment: fixed;
  		background-size: cover;
  		background-size: 100% 99%;
  	}
  	.invalid-feedback {
		font-weight: normal;
	}

</style>
<body>

	<form action="shop_login.php" method="post" class="needs-validation" novalidate="">
		
		<h2>AUTOMOTIVE</h2>
		<h1>SHOP FINDER</h1>

		<br>
		<label for="username"><b>Username<b></label>
		<input type="text" placeholder="Enter Username" name="username" id="username">
			<div class="invalid-feedback">Enter Username</div>
		<br>

		<label for="password"><b>Password<b></label>
		<input type="password" placeholder="Enter Password" name="password" id="password">
			<div class="invalid-feedback">Enter Password</div>

		<div class="login">
			<button class="login" type="submit" name="login">Login</button>
		</div>
		<br>

		<div class="containersignin">

    		<p>Don't have an account? <a href="shop_registration.html">Register</a></p>
  		</div>		
	</form>


</body>
</html>

