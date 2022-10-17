
	<?php
			$vehicletype="";
			$problem ="";
			$date="";
			$time = "";
			$status="Approved";

			

			if(isset($_POST['accept'])) {

				$vehicletype = trim($_POST["vehicletype"]);
				$problem = trim($_POST["problem"]);
				$date = $_POST["date"];
				$time = $_POST["time"];
				$status=$_POST["status"];
							
				$db = mysqli_connect('localhost', 'root', '', 'mechanico');

				if(mysqli_connect_error())
				{					
					echo '<script> alert("Error connection to the database")</script>';
				}
				else
				{
					$query = "update 
									reservations
								set status = 'Approved'
								where 
									vehicletype = ".$vehicletype."";
					
					mysqli_query($conn, $query);
					
					echo "<div class='successful'><p>Succesfully Updated.....</p></div>";
				}
				
				mysqli_close($conn);
			}			

					
	?>
