<?php
require 'db_connect.php';

// session_start(); ไม่จำเป็นต้นใช้ เพราะรับค่ามาเรื่อยๆ
// session_start();
// session_start(); ไม่จำเป็นต้นใช้ เพราะรับค่ามาเรื่อยๆ

/*
$id_user   = $_SESSION['id_user'];
$conn_user = "SELECT * FROM info_users WHERE id_user = $id_user";
$conn_u    = $conn->query($conn_user);
$conUser   = $conn_u->fetch_assoc();

echo $conUser['id_user'];
echo $conUser['amphoe'];

$new_gender              = $conUser['gender'];
$new_age                 = $conUser['age'];
$new_homeland            = $conUser['county'];
$new_career              = $conUser['career'];
$new_congenital_dis      = $conUser['congenital_dis'];
$new_name_congenital_dis = $conUser['name_congenital_dis'];
$new_body_movement       = $conUser['body_movement'];

 */

/*
$new_gender              = "ชาย";
$new_age                 = "70 ปีขึ้นไป	";
$new_homeland            = "พิษณุโลก";
$new_career              = "รับราชการ";
$new_congenital_dis      = "มี";
$new_name_congenital_dis = "";
$new_body_movement       = "เดินได้ปกติ";
$new_saving              = "ไม่มี";
$new_travel              = "ครอบครัว";
$new_car                 = "รถส่วนตัว";
$new_traveltime          = "2 - 3 วัน";
$new_camp                = "รีสอร์ท";
$new_money               = "3,000 – 5,000 บาท";
$province                = '3';

$new_gender              = "หญิง";
$new_age                 = "50 - 60 ปี";
$new_homeland            = "กำแพงเพชร";
$new_career              = "ค้าขาย";
$new_congenital_dis      = "ไม่มี";
$new_name_congenital_dis = "";
$new_body_movement       = "เดินได้ปกติ";
$new_saving              = "มี";
$new_travel              = "ครอบครัว";
$new_car                 = "รถส่วนตัว";
$new_traveltime          = "2 - 3 วัน";
$new_camp                = "รีสอร์ท";
$new_money               = "มากกว่า 5,000 บาท";
$province                = '4';
 */

$new_gender              = "หญิง";
$new_age                 = "50 - 60 ปี";
$new_homeland            = "อุทัยธานี";
$new_career              = "รับราชการ";
$new_congenital_dis      = "ไม่มี";
$new_name_congenital_dis = "";
$new_body_movement       = "เดินได้ปกติ";
$new_saving              = "มี";
$new_travel              = "แพคเกจท่องเที่ยว";
$new_car                 = "รถส่วนตัว";
$new_traveltime          = "2 - 3 วัน";
$new_camp                = "โรงแรม";
$new_money               = "1,000 - 3,000 บาท";
$province                = '1';

/*
$new_gender              = "ชาย";
$new_age                 = "50 - 60 ปี";
$new_homeland            = "อุทัยธานี";
$new_career              = "ค้าขาย";
$new_congenital_dis      = "มี";
$new_name_congenital_dis = "";
$new_body_movement       = "เดินได้ปกติ";
$new_saving              = "มี";
$new_travel              = "ครอบครัว";
$new_car                 = "รถส่วนตัว";
$new_traveltime          = "2 - 3 วัน";
$new_camp                = "รีสอร์ท";
$new_money               = "มากกว่า 5,000 บาท";
$province                = '1';
 */

$oldcase_db = "SELECT * FROM oldcase ORDER BY `id` ASC ";
$key        = $conn->query($oldcase_db);
// $key->num_rows > 0;

$n1 = 0;
$t1 = "";

$n2 = 0;
$t2 = "";

$n3 = 0;
$t3 = "";

// $n4 = 0;
// $t4 = "";

// $n5 = 0;
// $t5 = "";

// เลือกที่คล้ายมากสุด
while ($row = $key->fetch_assoc()) {

	$mathtotal = 0;
	$id        = $row['id'];

	// $row['id_province'] == จังหวัดที่อยากไป

	if ($row['id_province'] == $province) {

		//row['tourism'] == 1 ตรวจสอบจังหวัดที่เคยไป
		if ($row['tourism'] == 1) {

			// เปรียบเทียบ ถ้าโรคประจำตัวและการเคลื่อนไหวร่างกายตรงกับข้อมูลใน db จะทำงาน
			if ($new_congenital_dis == $row['congenital_dis'] && $new_body_movement == $row['body_movement']) {

				// $row['appropriate'] == 4 || $row['appropriate'] == 5 ตรวจสอบความเหมาะสมเท่ากับ 4 หรือ 5 คะแนน
				if ($row['appropriate'] == 4 || $row['appropriate'] == 5) {

					// $row['facilities'] == 1 ตรวจสอบสิ่งอำนวยความสะดวก
					if ($row['facilities'] == 1) {

						if ($new_gender == $row['gender']) {
							$summath1 = 3;
							$mathtotal += $summath1;
							// echo $mathtotal;
						} else {
							$summath1 = 0;
							$mathtotal += $summath1;
						}
						if ($new_age == $row['age']) {
							$summath2 = 6.3;
							$mathtotal += $summath2;
						} else {
							$summath2 = 0;
							$mathtotal += $summath2;
						}
						if ($new_homeland == $row['homeland']) {
							$summath3 = 4;
							$mathtotal += $summath3;
						} else {
							$summath3 = 0;
							$mathtotal += $summath3;
						}
						if ($new_career == $row['career']) {
							$summath4 = 3.7;
							$mathtotal += $summath4;
						} else {
							$summath4 = 0;
							$mathtotal += $summath4;
						}
						if ($new_congenital_dis == $row['congenital_dis']) {
							$summath5 = 9;
							$mathtotal += $summath5;
						} else {
							$summath5 = 0;
							$mathtotal += $summath5;
						}
						if ($new_name_congenital_dis == $row['name_congenital_dis']) {
							$summath6 = 4;
							$mathtotal += $summath6;
						} else {
							$summath6 = 0;
							$mathtotal += $summath6;
						}
						if ($new_body_movement == $row['body_movement']) {
							$summath7 = 10;
							$mathtotal += $summath7;
						} else {
							$summath7 = 0;
							$mathtotal += $summath7;
						}
						if ($new_saving == $row['saving']) {
							$summath8 = 2.5;
							$mathtotal += $summath8;
						} else {
							$summath8 = 0;
							$mathtotal += $summath8;
						}
						if ($new_travel == $row['travel_form']) {
							$summath9 = 5;
							$mathtotal += $summath9;
						} else {
							$summath9 = 0;
							$mathtotal += $summath9;
						}
						if ($new_car == $row['vehicle']) {
							$summath10 = 6;
							$mathtotal += $summath10;
						} else {
							$summath10 = 0;
							$mathtotal += $summath10;
						}
						if ($new_traveltime == $row['travel_time']) {
							$summath11 = 5.5;
							$mathtotal += $summath11;
						} else {
							$summath11 = 0;
							$mathtotal += $summath11;
						}
						if ($new_camp == $row['camp']) {
							$summath12 = 6;
							$mathtotal += $summath12;
						} else {
							$summath12 = 0;
							$mathtotal += $summath12;
						}
						if ($new_money == $row['charges']) {
							$summath13 = 7;
							$mathtotal += $summath13;
						} else {
							$summath13 = 0;
							$mathtotal += $summath13;
						}
						if ($row['appropriate'] == 4) {
							$summath14 = 6;
							$mathtotal += $summath14;
						} else {
							$summath14 = 0;
							$mathtotal += $summath14;
						}
						if ($row['appropriate'] == 5) {
							$summath15 = 7.5;
							$mathtotal += $summath15;
						} else {
							$summath15 = 0;
							$mathtotal += $summath15;
						}
						if ($row['facilities'] == 1) {
							$summath16 = 8;
							$mathtotal += $summath16;
						} else {
							$summath16 = 0;
							$mathtotal += $summath16;
						}
					}
				}

			}

		}

	}

	// echo $id;
	// echo "<br>";

	// เปรียบเทียบค่าหลังจาก query
	if ($mathtotal >= $n1) {
		if ($mathtotal >= $n2) {
			if ($mathtotal >= $n3) {
				$n1 = $n2;
				$t1 = $t2;

				$n2 = $n3;
				$t2 = $t3;

				$n3 = $mathtotal;
				$t3 = $id;
			} else {
				$n1 = $n2;
				$t1 = $t2;

				$n2 = $mathtotal;
				$t2 = $id;
			}
		} else {
			$n1 = $mathtotal;
			$t1 = $id;
		}

	}
}
// echo $t3;
// echo '<br>';

$result = "SELECT * FROM oldcase WHERE id = '$t3'";
$key    = $conn->query($result);
$answer = $key->fetch_assoc();

// if (isset($_POST['Size'])) {
// 	$	x = $New_Size;
// 	$y = $a['size'];
// 	$sum = 1 - (abs($x - $y) / 3);
// 	$point2 = $sum * 6;
// 	$mathtotal += $point2;
// }

// $sim3 = ($mathtotal / 120) * 100;
// }

?>