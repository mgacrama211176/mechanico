<?php

$host = "localhost";
$dbname = "mechanico";
$username = "root";
$password = "";


$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
	die("Connection error: " . $mysqli->connect_errno);
}

return $mysqli;