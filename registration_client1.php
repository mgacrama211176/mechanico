<?php
session_start();
include 'database.php';
if(isset($_POST['regBtn'])){

	function validate ($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

$lastname = validate ($_POST['lastname']);
$firstname = validate ($_POST['firstname']);
$mobilenumber = validate ($_POST['mobilenumber']);
$username = validate ($_POST['username']);
$password_hash = validate (md5($_POST['password']));

	
	if (! preg_match("/[a-z]/i", $_POST["password"])) {
	    echo "<script>alert('Password must contain at least one letter.');
	 </script>";
	}
	if (! preg_match("/[0-9]/", $_POST["password"])) {
    	echo "<script>alert('Password must contain at least one number.');
	 </script>";
	}
	if ($_POST["password"] !== $_POST["confirmpassword"]) {
	echo "<script>alert('Password must match.');
	 </script>";
	 }

	$result = mysqli_query ($mysqli, "INSERT INTO user (lastname, firstname, mobilenumber, username, password_hash) 
		VALUES ('$lastname', '$firstname', '$mobilenumber', '$username', '$password_hash')");

	if($result){
		header('Location:login.php?success=Registered Successfully!');
	}else{
		header('Location:registration_client.php?error=Registration Failed!');
	}
}

if(isset($_POST['login'])){
	function validate ($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

$username = validate ($_POST['username']);
$password_hash = validate (md5($_POST['password']));

$result = mysqli_query($mysqli, ("SELECT * from user WHERE username = '$username' && password_hash = '$password_hash'"));

$row = mysqli_fetch_row($result);

$_SESSION['$username'] = $row['username'];
// $_SESSION['$password_hash'] = $row['password_hash'];

	if($_SESSION['$username'] == $row['username']){

		header('Location: dashboard_client.php');
	}

	else{
		echo "<script>alert('Login Failed!');
	 </script>";
	}
}