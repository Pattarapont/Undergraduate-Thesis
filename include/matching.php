<?php
include 'db_connect.php';
// include 'getvariable.php';

$new_gender = "ชาย";
$new_age = "50 - 60 ปี";
$new_homeland = "พิษณุโลก";
$new_career = "รับราชการ";
$new_congenital_dis = "ไม่มี";
$new_name_congenital_dis = "";
$new_body_movement = "เดินได้ปกติ";
$new_travel = "ครอบครัว";
$new_car = "รถส่วนตัว";
$new_traveltime = "2 - 3 วัน";
$new_camp = "รีสอร์ท";
$new_money = "3,000 – 5,000 บาท";

$oldcase_db = "SELECT * FROM oldcase ORDER BY `id` ASC ";
$key = $conn->query($oldcase_db);
// $id_oc = "";
if ($key->num_rows > 0) {
	// output data of each row
	$new1 = 0;
	$t1 = "";

	$new2 = 0;
	$t2 = "";

	$new3 = 0;
	$t3 = "";

	$new4 = 0;
	$t4 = "";

	$new5 = 0;
	$t5 = "";
	// เลือกที่คล้ายมากสุด
	while ($row = $key->fetch_assoc()) {

		$mathtotal = 0;

		$id = $row['id'];

		if ($row['tourism'] == 1) {

			if ($new_congenital_dis == $row['congenital_dis']) {
				$summath1 = 3.0;
				$mathtotal += $summath1;
			} else {
				$summath1 = 0;
				$mathtotal += $summath1;
			}
			if ($new_body_movement == $row['body_movement']) {
				$summath2 = 3.3;
				$mathtotal += $summath2;
			} else {
				$summath2 = 0;
				$mathtotal += $summath2;
			}
			if ($new_money == $row['charges']) {
				$summath1 = 2.0;
				$mathtotal += $summath1;
			} else {
				$summath1 = 0;
				$mathtotal += $summath1;
			}
			if ($new_camp == $row['camp']) {
				$summath1 = 2.0;
				$mathtotal += $summath1;
			} else {
				$summath1 = 0;
				$mathtotal += $summath1;
			}
			if ($new_travel == $row['travel_form']) {
				$summath1 = 1.0;
				$mathtotal += $summath1;
			} else {
				$summath1 = 0;
				$mathtotal += $summath1;
			}
		}
		// echo $id;
		// echo "<br>";

		// เปรียบเทียบค่าหลังจาก query

		if ($mathtotal >= $new1) {
			if ($mathtotal >= $new2) {
				if ($mathtotal >= $new3) {
					if ($mathtotal >= $new4) {
						if ($mathtotal >= $new5) {
							$new1 = $new2;
							$t1 = $t2;

							$new2 = $new3;
							$t2 = $t3;

							$new3 = $new4;
							$t3 = $t4;

							$new4 = $new5;
							$t4 = $t5;

							$new5 = $mathtotal;
							$t5 = $id;
						} else {
							$new1 = $new2;
							$t1 = $t2;

							$new2 = $new3;
							$t2 = $t3;

							$new3 = $new4;
							$t3 = $t4;

							$new4 = $mathtotal;
							$t4 = $id;
						}
					} else {
						$new1 = $new2;
						$t1 = $t2;

						$new2 = $new3;
						$t2 = $t3;

						$new3 = $mathtotal;
						$t3 = $id;
					}
				} else {
					$new1 = $new2;
					$t1 = $t2;

					$new2 = $mathtotal;
					$t2 = $id;
				}
			} else {
				$new1 = $mathtotal;
				$t1 = $id;
			}
		}
		// echo $row['travel_form'];
	}

	// โชว์คอลัมที่เลือก
	// $id_oc = "SELECT * FROM oldcase WHERE id = '$t5'";
	// $mathc = $conn->query($id_oc);
	// $mathc->fetch_assoc();
	// $r = mysql_fetch_array($mathc);

	$id_oc = "SELECT * FROM oldcase WHERE id = '$t5'";
	$mathc = $conn->query($oldcase_db);
	$row = $mathc->fetch_assoc();

	echo $row['location'];
	// $idoc = "SELECT * FROM oldcase WHERE id = '$t5'";
	// $mathc = mysql_query($idoc) or die("Error Query ["$idoc"]");
	// $a = mysql_fetch_array($mathc);

// 	$strSQL1 = "SELECT * FROM oldcase WHERE id = '$t5'";
	// 	$objQuery1 = mysql_query($strSQL1) or die("Error Query [" . $strSQL1 . "]");
	// 	$a = mysql_fetch_array($objQuery1);
}

?>