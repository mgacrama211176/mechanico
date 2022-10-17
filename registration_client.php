<?php
	include 'database.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

	<title>Registration</title>
	<style>

		*{
			font-family: 'Red Hat Display', sans-serif;
		}
		form {
			position: absolute;
			margin-top: 31%;
			left: 22%;
			-webkit-transform: translate(-50%, -50%);
			-moz-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			-o-transform: translate(-25%, -50%);
			transform: translate(-50%, -50%);
			width: 38%;
			height: 130%;
			padding: 15px 40px;
			background: #004B59;
			margin-left: -3%;
		}
 		input{
			width: 90%;
			height: 1vh;
			padding: 15px;
			margin: 5px 0 22px 0;
			display: inline-block;
			border: none;
			background: #f1f1f1;
			border-radius: 10px;
 		}
 		label {
 			color: white;
 			text-decoration: none;
 			font-size: 20px;
			font-weight: 200;
			line-height: 10px;
 		}
 		h1 {
 			color: white;
 			text-decoration: none;
			font-size: 28px;
 		}
 		.p {
 			color: white;
 			text-decoration: none;
 			font-size: 24px;
 			line-height: 15px;
 		}

 		.registerbtn {
 			background-color: #01ABCA;
 			color: white;
 			font-size: 20px;
			padding: 10px 22px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 30%;
			opacity: 0.9;
			margin-left: 35%;
 		}
		.containersignin p{
			color: white;
			font-size: 20px;
			font-weight: 80;
		}
		.containersignin a {
			color: #14AFCC;
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
		button{
			font-size: 22px;
			font-weight: 80;
		}
		.invalid-feedback {
			line-height: 0px;
		}
	</style>
</head>

<body>

		<form action="registration_client1.php" method="post" class="needs-validation" novalidate="">

		  <div class="container">
		  	<?php if (isset($_GET['error'])){ ?><p class="error alert alert-danger"><?php echo $_GET['error'];?></p><?php }?>
   		 	
		  	<br>
		    <h1><b>REGISTER</b></h1>
		    <p class="p">Please fill in this form to create an account.</p>

		    <label for="lastname"><b>Lastname</b></label>
		    <input type="text" placeholder="Enter Fullname" name="lastname" id="lastname" required>
		    <div class="invalid-feedback">Enter Lastname</div><br>
 
			<label for="firstname"><b>Firstname</b></label>
		    <input type="text" placeholder="Enter Firstname" name="firstname" id="firstname" required>
		    <div class="invalid-feedback">Enter Firstname</div><br>

		    <label for="mobilenumber"><b>Mobile Number</b></label>
		    <input type="tel" placeholder="Enter Mobile Number" name="mobilenumber" id="mobilenumber" required>
		    <div class="invalid-feedback">Enter Mobile Number</div><br>

		    <label for="username"><b>Username</b></label>
		    <input type="text" placeholder="Enter Username" name="username" id="username" required>
		    <div class="invalid-feedback">Enter Username</div><br>

		    <label for="password"><b>Password</b></label>
		    <input type="password" placeholder="Enter Password" name="password" id="password" required>
		    <div class="invalid-feedback">Enter Password</div><br>

		    <label for="confirmpassword"><b>Confirm Password</b></label>
		    <input type="password" placeholder="Confirm Password" name="confirmpassword" id="confirmpassword" required>
		    <div class="invalid-feedback">Confirm Password</div><br>
		   
		    <button class="registerbtn" name="regBtn" type="submit">Register</button>

		  </div>
		  	<br>
		  <div class="containersignin">
		    <p>Already have an account? <a href="login.php">Log in</a></p>
		  </div>
</form>
<script>
var forms = document.querySelectorAll('.needs-validation')
Array.prototype.slice.call(forms)
  .forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
</script>
</body>
</html>
