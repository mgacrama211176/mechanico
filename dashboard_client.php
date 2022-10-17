<?php 
	session_start();
	error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Client Homepage</title>
</head>
<link rel="stylesheet" type="text/css" href="client.css">

<body>
	<section id="interface">
			<div class="profile">
				<div class="welcome"><h2 >Welcome to Mechanico!</h2></div>
				<div><img src="logo.png" width="100" height="95" /></div>
			</div>	
	</section>

		<section class="menu">
			<div class="logo">
					<img src="dd.png"/>
			</div>
			<nav class="items">
				<ul>
					<li><a href="dashboard_client.php">Home</a></li>

					<li><a href="autoshop_client.php">Auto-Shops</a></li>

					<li><a href="services.php">Services</a></li>

					<li><a href="myappointment_client.html">My appointment</a></li>

					<li><a href="">My Profile</a></li>

					<li><a href="logout.php">Log out</a></li>
				</ul>
			</nav>
		</section>
</body>
</html>