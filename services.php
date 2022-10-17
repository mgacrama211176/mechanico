<?php 
	include_once('database.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Available Services</title>
</head>
<link rel="stylesheet" type="text/css" href="client.css">

<body>
	<section id="interface">
			<div class="profile">
				<div class="welcome"><h2 >Auto-shop Services</h2></div>
				<div><img src="logo.png" width="100" height="95" /></div>
			</div>	
	</section>

		<section class="menu">
			<div class="logo">
					<img src="dd.png"/>
			</div>
			<nav class="items">
				<ul>
					<li class="dashboard"><a href="dashboard_client.php">Dashboard</a></li>

					<li><a href="autoshop_client.php">Auto-Shops</a></li>

					<li><a href="services.php">Services</a></li>

					<li><a href="myappointment_client.php">My appointment</a></li>

					<li><a href="">My Profile</a></li>

					<li><a href="logout.php">Log out</a></li>
				</ul>
			</nav>
		</section>
		<section class= "autoshop">
			<?php
			$id="";
			$service1 = "";
			$service2= "";
			$service3 = "";
			$service4 = "";

				
				$conn = mysqli_connect ( "localhost", "root", "", "mechanico" );
				if(mysqli_connect_error())
				{
					echo "<p>Error connection to database</p>";
				}
				else
				{
					$query = "SELECT id, service1, service2, service3, service4, location FROM autoshop";					
					$record = mysqli_query($conn, $query);					
					if(mysqli_num_rows($record) > 0)
					{
						

					while ($row=mysqli_fetch_assoc($record))
						{
							echo "<center>";
						echo "<table border='1' style='color: black; border-color: black; border-collapse:collapse; padding: 10px; width:65%;'>";
						echo "	<thead>";
						echo "		<tr>";
						echo "			<th style= 'padding: 10px;'>Service 1</th>";
						echo "			<th>Service 2</th>";
						echo "			<th>Service 3</th>";
						echo "			<th>Service 4</th>";
						echo "			<th></th>";
						echo "		</tr>";
						echo "	</thead>";
						echo "	<tbody>";

							echo "<tr style = 'text-align:center;'>";
							echo "	<td>".$row["service1"]."</td>";
							echo "	<td>".$row["service2"]."</td>";
							echo "	<td>".$row["service3"]."</td>";
							echo "	<td>".$row["service4"]."</td>";
							
							echo "</tr>";
							
							echo "<tr style = 'text-align:center;'>";
							echo "	<td><center><a class='edit' href='reserve.php?id=".$row["id"]."'>Reserve Service</a></center></td>";
							echo "	<td><center><a class='edit' href='reserve.php?id=".$row["id"]."'>Reserve Service</a></center></td>";
							echo "	<td><center><a class='edit' href='reserve.php?id=".$row["id"]."'>Reserve Service</a></center></td>";
							echo "	<td><center><a class='edit' href='reserve.php?id=".$row["id"]."'>Reserve Service</a></center></td>";

							echo "</tr>";
							echo "</center>";
						}						
						echo "	</tbody>";
						echo "</table>";
						
						mysqli_free_result($record);
					}
					else
					{
						echo "<p>No records found.</p>";
					}					
				}
				mysqli_close($conn);						

		?>
		</section>
</body>
</html>