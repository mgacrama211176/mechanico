<?php
	session_start();
	error_reporting(E_ALL);
	//check f the user is not yet logged in
	if(! isset($_SESSION["username"]))
	{
		//is user is not yet logged in, forced him to go back to login.php
		header("location: login.php");
		exit;
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
</head>
<link rel="stylesheet" type="text/css" href="shop.css">

<body>
	<section id="interface">
			<div class="profile">
				<div class="welcome"><h2 >Welcome to Mechanico!</h2></div>
				<div><img src="logo.png" width="100" height="95" /></div>
			</div>	
	</section>

		<section class="menu">
			<div class="logo">
					<img src="dd.png" />

			</div>
			
				<nav class="items">
					<ul>
						<li class="btn">
							<a href="admin.php">Dashboard</a>
						</li>
						<li class="btn">
							<a href="contactus.php">Reservations</a>
						</li>
						<li class="btn">
							<a href="">Notification</a>
						</li>
						</li>
						<li class="btn">
							<a href="history_admin.php">History</a>
						</li>
						<li class="btn">
							<a href="myaccount_admin.php">My account</a>
						</li>
						<li class="btn">
							<a href="logout.php">Log out</a>
						</li>
					</ul>
				</nav>
		</section>	
</body>
</html>