<?php
$db_server   = 'localhost';
$db_username = 'root';
$db_password = '';
$db_dbname   = 'et_cbr';
$conn        = new mysqli($db_server, $db_username, $db_password, $db_dbname);
/*
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
 */

$sql_DataOldcase = "SELECT * FROM data_oldcase WHERE id_data_oldcase = 1";

$calldb = "SELECT * FROM data_oldcase
WHERE id_data_oldcase='1'";

/*
$sql_DataPhitsanulok = "SELECT * FROM data_phitsanulok";
$sql_DataPhetchabun  = "SELECT * FROM data_phetchabun";
$sql_DataChiangMai   = "SELECT * FROM data_chiangmai ";
$sql_DataChiangRai   = "SELECT * FROM data_chiangrai ";
 */

function getGender($conn) {
	$gender = [];

	return $gender;
}

function getAge($conn) {
	$age = [];

	return $age;
}

function getProvince($conn) {
	$province = [];

	return $province;
}

function getCareer($conn) {
	$career = [];

	return $career;
}

function getCongenital_dis($conn) {
	$congenital_dis = [];

	return $congenital_dis;
}

function getName_congenital_dis($conn) {
	$name_congenital_dis = [];

	return $name_congenital_dis;
}

function getBody_movement($conn) {
	$body_movement = [];
	return $body_movement;
}

function getSaving($conn) {
	$saving = [];

	return $saving;
}

/*
function test() {
$tt = 'aaaaaaaaaaaaaaaaa';
return $tt;
}

$b = test();
$a = 'kk';

echo $a, $b;
 */
?>
