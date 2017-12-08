<?php
require 'db_connect.php';

$telephone           = $conn->real_escape_string($_REQUEST['telephone']);
$gender              = $conn->real_escape_string($_REQUEST['gender']);
$age                 = $conn->real_escape_string($_REQUEST['age']);
$career              = $conn->real_escape_string($_REQUEST['career']);
$district            = $conn->real_escape_string($_REQUEST['district']);
$amphoe              = $conn->real_escape_string($_REQUEST['amphoe']);
$county              = $conn->real_escape_string($_REQUEST['county']);
$zipcode             = $conn->real_escape_string($_REQUEST['zipcode']);
$congenital_dis      = $conn->real_escape_string($_REQUEST['congenital_dis']);
$name_congenital_dis = $conn->real_escape_string($_REQUEST['name_congenital_dis']);
$body_movement       = $conn->real_escape_string($_REQUEST['body_movement']);

// $id_user = '12';

$insert_info_user = "INSERT INTO info_users (gender, age, career, district, amphoe, county, zipcode, congenital_dis, name_congenital_dis, body_movement)
				VALUES ('$gender', '$age', '$career', '$district', '$amphoe', '$county', '$zipcode', '$congenital_dis', '$name_congenital_dis', '$body_movement')";

if ($conn->query($insert_info_user) === true) {
	// echo "Records inserted successfully.";
	header("Location: /et_cbr/guide.php");
	die();
} else {
	echo "ERROR: Could not able to execute $sql. " .$mysqli->error;
}

?>