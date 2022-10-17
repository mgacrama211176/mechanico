<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Auto-Shop Reservations</title>
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
						<li>
							<a href="dashboard_shop.php">Dashboard</a>
						</li>
						<li>
							<a href="reservations_shop.php">Reservations</a>
						</li>
						<li>
							<a href="">Notification</a>
						</li>
						<li>
							<a href="history_shop.html">History</a>
						</li>
						<li>
							<a href="#">My account</a>
						</li>
						<li>
							<a href="logout.php">Log out</a>
						</li>
					</ul>
				</nav>
		</section>	
		<section>
			<?php
			$id = "";
			$shopname = "";
			$mobilenumber = "";
			$location = "";

				
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
						echo "			<th>Action</th>";
						echo "			<th>Payment</th>";
						echo "		</tr>";
						echo "	</thead>";
						echo "	<tbody>";

							echo "<tr style = 'text-align:center;'>";
							echo "	<td>".$row["vehicletype"]."</td>";
							echo "	<td>".$row["problem"]."</td>";
							echo "	<td>".$row["date"]."</td>";
							echo "	<td>".$row["time"]."</td>";
							echo "	<td><center><button><a class='edit' href='accept.php?id=".$row["id"]."'>Accept</a></button> 
							<button><a class='edit' href='accept.php?id=".$row["id"]."'>Decline</a></button> </center></td>";
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
			  	<td><button>Accept</button></td>
			  	<td><button>Decline</button></td>
			  </tr>
			</table> -->
		</section>
</body>
</html>