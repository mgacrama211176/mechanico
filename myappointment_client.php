<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Appointments</title>
</head>
<link rel="stylesheet" type="text/css" href="client.css">

<body>
	<section id="interface">
			<div class="profile">
				<div class="welcome"><h2 >My Appointments</h2></div>
				<div><img src="logo.png" width="100" height="95" /></div>
			</div>	
	</section>

		<section class="menu">
			<div class="logo">
					<img src="dd.png"/>
			</div>
			<nav class="items">
				<ul>
					<li class="dashboard"><a href="dashboard_client.php">Home</a></li>

					<li><a href="autoshop_client.php">Auto-Shops</a></li>

					<li><a href="services.php">Services</a></li>

					<li><a href="myappointment_client.php">My appointment</a></li>

					<li><a href="">My Profile</a></li>

					<li><a href="logout.php">Log out</a></li>
				</ul>
			</nav>
		</section>
		<section class="autoshop">
			<?php
			$vehicletype = "";
			$problem = "";
			$date="";
			$time="";

				
				$conn = mysqli_connect ( "localhost", "root", "", "mechanico" );
				if(mysqli_connect_error())
				{
					echo "<p>Error connection to database</p>";
				}
				else
				{
					$query = "SELECT id, vehicletype, problem, date, time FROM reservations";					
					$record = mysqli_query($conn, $query);					
					if(mysqli_num_rows($record) > 0)
					{
						

					while ($row=mysqli_fetch_assoc($record))
						{
							echo "<center>";
						echo "<table border='1' style='color: black; border-color: black; border-collapse:collapse; padding: 10px; width:65%;'>";
						echo "	<thead>";
						echo "		<tr>";
						echo "			<th style= 'padding: 10px;'>Vehicle Type</th>";
						echo "			<th>Vehicle Problem</th>";
						echo "			<th>Date</th>";
						echo "			<th>Time</th>";
						echo "			<th>Status</th>";
						echo "			<th>Payment</th>";
						echo "		</tr>";
						echo "	</thead>";
						echo "	<tbody>";

							echo "<tr style = 'text-align:center;'>";
							echo "	<td>".$row["vehicletype"]."</td>";
							echo "	<td>".$row["problem"]."</td>";
							echo "	<td>".$row["date"]."</td>";
							echo "	<td>".$row["time"]."</td>";
							echo "	<td></td>";
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
			<!-- <table>
			  <tr>
			    <th>Services</th>
			    <th>Name of the Client</th>
			    <th>Mobile Number</th>
			    <th>Date and Time</th>
			    <th></th>
			    <th></th>
			  </tr>
			  <tr>
			  	<td>Tire Replacement</td>
			  	<td>Juan Pepito</td>
			  	<td>09123456789</td>
			  	<td>August 10, 2022 9:00AM</td>
			  	<td>Pending for Approval</td>
			  </tr>
			</table> -->
		</section>
		
</body>
</html>