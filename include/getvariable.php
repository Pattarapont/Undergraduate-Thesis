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

/*
$new_gender              = $_POST['gender'];
$new_age                 = $_POST['age'];
$new_homeland            = $_POST['homeland'];
$new_career              = $_POST['career'];
$new_congenital_dis      = $_POST['congenital_dis'];
$new_name_congenital_dis = $_POST['name_congenital_dis'];
$new_body_movement       = $_POST['body_movement'];
$new_saving              = $_POST['saving'];
$new_travel              = $_POST['travel_form'];
$new_car                 = $_POST['vehicle'];
$new_traveltime          = $_POST['travel_time'];
$new_camp                = $_POST['camp'];
$new_money               = $_POST['charges'];
$province                = $_POST['check_province'];

/*
$new_gender              = "ชาย";
$new_age                 = "50 - 60 ปี";
$new_homeland            = "พิษณุโลก";
$new_career              = "รับราชการ";
$new_congenital_dis      = "ไม่มี";
$new_name_congenital_dis = "";
$new_body_movement       = "เดินได้ปกติ";
$new_saving              = "มี";
$new_travel              = "ครอบครัว";
$new_car                 = "รถส่วนตัว";
$new_traveltime          = "2 - 3 วัน";
$new_camp                = "รีสอร์ท";
$new_money               = "3,000 – 5,000 บาท";
$province                = '1';
 */
?>