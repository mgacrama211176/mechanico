<?php
	session_start();
	error_reporting(E_ALL);
	
	
	
	if($_SESSION = array()){
	
	session_destroy();
	unset($_SESSION);
	
	header('Location: login.php');

	}
?>
