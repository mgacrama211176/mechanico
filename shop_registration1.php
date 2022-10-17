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

	$shopname = validate ($_POST['shopname']);
	$mobilenumber = validate ($_POST['mobilenumber']);
	$location = validate ($_POST['location']);
	$owner = validate ($_POST['owner']);

	$ownerid =  ($_FILES['ownerid']['name']);
	$tempName =  ($_FILES['ownerid']['tmp_name']);

	$businesspermit = ($_FILES['businesspermit']['name']);
	$tempBP = ($_FILES['businesspermit']['tmp_name']);

	$shopic = ($_FILES['shopic']['name']);
	$tempshopic = ($_FILES['shopic']['tmp_name']);

	// $businesspermit = validate ($_POST['businesspermit']);
	// $shopic = validate ($_POST['shopic']);
	$username = validate ($_POST['username']);
	$password = validate ($_POST['password']);
	$password_hash = validate (md5($_POST['password']));
		

	// if (! preg_match("/[a-z]/i", $_POST["password"])) {
	// 	echo "<script>alert('Password must contain at least one letter.');
	//  </script>";
	// }
	// if (! preg_match("/[0-9]/", $_POST["password"])) {
    // 	echo "<script>alert('Password must contain at least one number.');
	//  </script>";
	// }
	// if ($_POST["password"] !== $_POST["confirmpassword"]) {
	// 	echo "<script>alert('Password must match.');
	//  </script>";
	//  }



	$upload1 =$ownerid;
	$upload2 = $businesspermit;
	$upload3 = $shopic;

	$target1 = "./ownerid/" . $upload1;
	$target2 = "./businesspermit/". $upload2;
	$target3 = "./shopic/". $upload3;

	// $upload2 = time() . '_' .$_FILES['businesspermit']['name'];
	// $target2 = 'businesspermit/' . $upload2;

	// $upload3 = time() . '_' . $_FILES['shopic']['name'];
	// $target3 = 'shopic/' . $upload3;
	
		if(move_uploaded_file($tempName, $target1) && move_uploaded_file($tempBP, $target2) && move_uploaded_file($tempshopic, $target3)) {
		$result = mysqli_query ($mysqli, "INSERT INTO autoshop (shopname, mobilenumber, location, owner, ownerid, businesspermit, shopic, username, password_hash) VALUES ('$shopname', '$mobilenumber', '$location', '$owner', '$target1', '$target2', '$target3', '$username', '$password_hash')");
		// $result = mysqli_query ($mysqli, "INSERT INTO autoshop (ownerid,location) VALUES ('$target1','$location')");
				// header('Location:login_shop.php');
		}

	// if($result){
	// 	header('Location:login_shop.php?success=Registered Successfully!');
	// }
	else{
echo `shit`;
		// header('Location:shop_registration.php?error=Registration Failed!');
	}
}
?>