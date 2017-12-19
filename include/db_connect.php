<?php

$host     = "localhost";
$user     = "root";
$password = "";
$database = "et_cbr";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
	echo "Failed to connect to MySQL: ".$conn->connect_error;
	exit;
}

if (!$conn->set_charset("utf8")) {
	printf("Error loading character set utf8: %s\n", $mysqli->error);
	exit();
}

?>