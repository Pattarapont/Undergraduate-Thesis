<?php
include 'db_connect.php';

/*
$sql_DataOldcase = "SELECT * FROM data_oldcase WHERE id_data_oldcase = 1";

$calldb = "SELECT * FROM data_oldcase
WHERE id_data_oldcase='1'";

$sql_DataPhitsanulok = "SELECT * FROM data_phitsanulok";
$sql_DataPhetchabun  = "SELECT * FROM data_phetchabun";
$sql_DataChiangMai   = "SELECT * FROM data_chiangmai ";
$sql_DataChiangRai   = "SELECT * FROM data_chiangrai ";
 */
function indexkey($conn) {
	/*
	โรคประจำตัว = 9.0
	การเคลื่อนไหวร่างกาย = 10.0
	 */
	// $keyindex   = [];
	$oldcase_db = "SELECT * FROM data_oldcase";
	$result     = $conn->query($oldcase_db);
	if ($result->num_rows > 0) {
		// output data of each row
		while ($row = $result->fetch_assoc()) {
			/*
			echo "<br> รวมนะจ๊าาา: ".$row["id_data_oldcase"].$row["province"]." ".$row["body_movement"]."<br>";
			echo $row["congenital_dis"];
			echo $row["body_movement"];
			 */

			// โรคประจำตัว = 9.0
			if ($new_congenital_dis == $row['congenital_dis']) {
				$summath1 = 9;
				$resultmath += $summath1;
			} else {
				$summath1 = 0;
				$resultmath += $summath1;
			}
			// การเคลื่อนไหวร่างกาย = 10.0
			if ($new_body_movement == $row['body_movement']) {
				$summath2 = 10;
				$resultmath += $summath2;
			} else {
				$summath2 = 0;
				$resultmath += $summath2;
			}
			// ฟังก์ชันคำนวน ??????????????

		}

		// $keyindex = ;
		// return $keyindex;

	} else {
		echo "0 results";
	}

	function matchinglocation() {

	}

	/*
while ($row = mysql_fetch_array($objQuery)) {

$result_index = 0;
$num1         = $row['id'];

#โรคประจำตัว = 9.0
if ($New_Shadow == $row['shadow']) {
$summat1 = 3;
$resultmat += $summat1;
} else {
$summat1 = 0;
$resultmat += $summat1;
}

#การเคลื่อนไหวร่างกาย = 10.0
if ($New_Beak == $row['beak_style']) {
$summat2 = 1;
$resultmat += $summat2;
} else {
$summat2 = 0;
$resultmat += $summat2;
}

#สิ่งอำนวยความสะดวกของสถานที่ = 8.0
if ($New_colorHead == $row['color_head']) {
$summat3 = 1;
$resultmat += $summat3;
} else {
$summat3 = 0;
$resultmat += $summat3;
}

if ($resultmat >= $n1) {
if ($resultmat >= $n2) {
if ($resultmat >= $n3) {
$n1 = $n2;
$t1 = $t2;

$n2 = $n3;
$t2 = $t3;

$n3 = $resultmat;
$t3 = $num1;
} else {
$n1 = $n2;
$t1 = $t2;

$n2 = $resultmat;
$t2 = $num1;
}
} else {
$n1 = $resultmat;
$t1 = $num1;
}

}
}
 */

}

/*
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

 */

// test function
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
