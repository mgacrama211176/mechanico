<?php
					$vehicletype = "";
					$problem = "";
					$date="";
					$time="";


					$db = mysqli_connect('localhost', 'root', '', 'mechanico');

				// reserve
				if (isset($_POST['reserve'])) {
				  // receive all input values from the form
				  $vehicletype = mysqli_real_escape_string($db, $_POST['vehicletype']);
				  $problem = mysqli_real_escape_string($db, $_POST['problem']);
				  $date = mysqli_real_escape_string($db, $_POST['date']);
				  $time = mysqli_real_escape_string($db, $_POST['time']);

				  $query = "INSERT INTO reservations (vehicletype, problem, date, time ) 
				          VALUES('$vehicletype','$problem', '$date', '$time')";
				   mysqli_query($db, $query);
				  	echo '<script> alert("Successfully Reserved")</script>';

					}

					?>
			
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Appointment</title>
</head>
<style>

	*{
	padding: 0;
	margin: 0;
  font-family: 'Montserrat', sans-serif;

}
form {
      position: absolute;
      margin-top: 35%;
      left: 45%;
      -webkit-transform: translate(-50%, -50%);
      -moz-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      -o-transform: translate(-25%, -50%);
      transform: translate(-50%, -50%);
      width: 38%;
      height: 100%;
      padding: 15px 40px;
    }
     input{
      width: 90%;
      height: 2vh;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
      border-radius: 10px;
    }
    label {
      text-decoration: none;
      font-size: 20px;
      font-weight: 200;
      line-height: 30px;
    }

	
</style>
<body>

<form action="reserve.php" method="POST" >
		    <h1><b>My Appointment</b></h1>
		    <br>

		    <label for="vehicletype" ><b>Type of Vehicle</b></label>
		   	<br>
			   <select id="Vtype" name="vehicletype" required>
		   	<option></option>
		   	<option value="two">2 wheels</option>
		   	<option value="four">4 wheels</option>
		   </select>
		   <br>
		    
		    <label for="vehicleprob" ><b>Vehicle Problem</b></label>
		    <input type="text" placeholder="Vehicle Problem" name="problem" required>

		    <label for="birthdaytime"><b>Reserve Date and Time</b></label>
  			<input type="date" id="time" name="date">
  			<br>
		    <small>Office hours are 9am to 6pm</small>
		    <input type="time" id="appt" name="time"
			       min="09:00" max="18:00" required>
		   
		    <button type="submit" class="add" name="reserve">Reserve</button>
        <br> 
        
        <button><a type="submit" class="add" name="" href="services.php">Cancel</a></button>
        
      </form>

</body>
</html>