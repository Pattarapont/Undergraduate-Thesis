<?php
include 'db_connect.php';
session_start();
$idUser = $_SESSION['id_user'];

// Escape user inputs for security
$first_name          = $conn->real_escape_string($_REQUEST['first_name']);
$last_name           = $conn->real_escape_string($_REQUEST['last_name']);
$email               = $conn->real_escape_string($_REQUEST['email']);
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

$email     = $_SESSION['email'];
$edit_user = "UPDATE users SET first_name = '$first_name', last_name = '$last_name' , email = '$email',
telephone = '$telephone' WHERE email = '" .$email."'";

$edit_info_user = "UPDATE info_users
SET gender = '$gender', age = '$age', career = '$career', district = '$district', amphoe = '$amphoe',
	county = '$county', zipcode = '$zipcode', congenital_dis = '$congenital_dis',
	name_congenital_dis = '$name_congenital_dis', body_movement = '$body_movement'
	WHERE id_user = '" .$idUser."'";

if ($conn->query($edit_user) === true && $conn->query($edit_info_user) === true) {
	echo '	<div class="row" style="margin-top: 200px;">
					<div class="col-lg-4 col-lg-offset-4">
					<div class="panel panel-success">
					<div class="panel-heading">
						<h4>บันทึกข้อมูลสำเร็จ</h4>
					</div>
					</div>
					</div>
					</div>';

	$save_us = "SELECT * FROM users as us
					INNER JOIN info_users as info on us.id_user = info.id_user
					WHERE us.id_user = '".$idUser."'";

	$db  = $conn->query($save_us);
	$col = $db->fetch_assoc();

	if ($col['gender'] == NULL OR $col['age'] == NULL OR $col['career'] == NULL
		 OR $col['county'] == NULL OR $col['congenital_dis'] == NULL OR $col['body_movement'] == NULL) {

		header("Refresh:0.0; url=/et_cbr/account.php");

	} else {

		header("Refresh:0.0; url=/et_cbr/guide.php");
	}
} else {
	echo "ERROR: Could not able to execute $sql. " .$mysqli->error;
}

$conn->close();
?>