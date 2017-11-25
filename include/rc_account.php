<?php
include 'db_connect.php';
// Escape user inputs for security
$first_name = $conn->real_escape_string($_REQUEST['first_name']);
$last_name  = $conn->real_escape_string($_REQUEST['last_name']);
$email      = $conn->real_escape_string($_REQUEST['email']);
$telephone  = $conn->real_escape_string($_REQUEST['telephone']);

$gender   = $conn->real_escape_string($_REQUEST['gender']);
$age      = $conn->real_escape_string($_REQUEST['age']);
$career   = $conn->real_escape_string($_REQUEST['career']);
$district = $conn->real_escape_string($_REQUEST['district']);
$amphoe   = $conn->real_escape_string($_REQUEST['amphoe']);
$county   = $conn->real_escape_string($_REQUEST['county']);
$zipcode  = $conn->real_escape_string($_REQUEST['zipcode']);
$id_user  = '12';

$insert_user = "INSERT INTO users (first_name, last_name, email, telephone)
					VALUES ('$first_name', '$last_name', '$email', '$telephone')";

if ($conn->query($insert_user) === true) {
	echo "Records inserted successfully.";
} else {
	echo "ERROR: Could not able to execute $sql. " .$mysqli->error;
}

$insert_info_user = "INSERT INTO info_users (id_user, gender, age, career, district, amphoe, county, zipcode)
				VALUES ('$id_user', '$gender', '$age', '$career', '$district', '$amphoe', '$county', '$zipcode')";

if ($conn->query($insert_info_user) === true) {
	echo "Records inserted successfully.";
} else {
	echo "ERROR: Could not able to execute $sql. " .$mysqli->error;
}

$conn->close();

header("Location: ..\predict.php");
die();
?>