<?php
$db_server   = "localhost";
$db_username = "root";
$db_password = "";
$db_dbname   = "et_cbr";

// function connect_db($db_server, $db_username, $db_password, $db_dbname) {
$conn = new mysqli($db_server, $db_username, $db_password, $db_dbname);

// Check connection
if ($conn->connect_error) {
	echo "Failed to connect to MySQL: ".$conn->connect_error;
	exit;
} else {
	echo "Success: connected to MySQL Najaaaaaa <br>", PHP_EOL;
	echo "Who am i <br>";
	echo "pattarapon";
}

if (!$conn->set_charset("utf8")) {
	printf("Error loading character set utf8: %s\n", $mysqli->error);
	exit();
}

return $conn;
// }

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
?>
