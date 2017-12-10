<?php
include 'include/db_connect.php';

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

$edit_user = "UPDATE users SET first_name = '$first_name', last_name = '$last_name' , email = '$email',
telephone = '$telephone' WHERE id_user = 4";

$edit_info_user = "UPDATE info_users
SET gender = '$gender', age = '$age', career = '$career', district = '$district', amphoe = '$amphoe',
	county = '$county', zipcode = '$zipcode', congenital_dis = '$congenital_dis',
	name_congenital_dis = '$name_congenital_dis', body_movement = '$body_movement'
	WHERE id_user = 4";

if ($conn->query($edit_user) === true && $conn->query($edit_info_user) === true) {
	echo '	<div class="row" style="margin-top: 200px;">
					<div class="col-lg-4 col-lg-offset-4">
					<div class="panel panel-success">
					<div class="panel-heading">
						<h4>บันทึกข้อมูล</h4>
					</div>
						<div class="panel-body">
						<h4>บันข้อมูลสำเร็จ</h4>
					</div>
					</div>
					</div>
					</div>';

	header("Refresh:0.7; url=/et_cbr/account.php");
} else {
	echo "ERROR: Could not able to execute $sql. " .$mysqli->error;
}

$conn->close();

// header("Location: /et_cbr/guide.php");
// die();
?>