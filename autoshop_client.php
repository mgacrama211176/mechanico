<?php
	include_once('database.php');
	// $query="SELECT id FROM shop";
	// $result=musql_query($query);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Auto-shops</title>
</head>

<link rel="stylesheet" type="text/css" href="client.css">

<body>


	<section id="interface">
			<div class="profile">
				<div class="welcome"><h2 >Auto-Shops</h2></div>
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
					$query = "SELECT id, shopname, mobilenumber, location FROM autoshop";					
					$record = mysqli_query($conn, $query);					
					if(mysqli_num_rows($record) > 0)
					{
						

					while ($row=mysqli_fetch_assoc($record))
						{
							echo "<center>";
						echo "<table border='1' style='color: black; border-color: black; border-collapse:collapse; padding: 10px; width:65%;'>";
						echo "	<thead>";
						echo "		<tr>";
						echo "			<th style= 'padding: 10px;'>Number</th>";
						echo "			<th>Shop Name</th>";
						echo "			<th>Mobile Number</th>";
						echo "			<th>Location</th>";
						echo "			<th></th>";
						echo "		</tr>";
						echo "	</thead>";
						echo "	<tbody>";

							echo "<tr style = 'text-align:center;'>";
							echo "	<td>".$row["id"]."</td>";
							echo "	<td>".$row["shopname"]."</td>";
							echo "	<td>".$row["mobilenumber"]."</td>";
							echo "	<td>".$row["location"]."</td>";
							echo "	<td><center><a class='edit' href='services.php?id=".$row["id"]."'>View Available Services</a></center></td>";
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
			
			 <!--  <tr>
			    <th>Auto-shops</th>
			    <th>Mobile Number</th>
			    <th>Location</th>
			    <th></th>
			  </tr>
			  <tr>
			  	<td>UC Auto-Shop Inc.</td>
			  	<td>09123456789</td>
			  	<td>Sanciangko St., Cebu City</td>
			  	<td><button>View Available Services</button></td>
			  </tr> -->
		</section>

</body>

</html>