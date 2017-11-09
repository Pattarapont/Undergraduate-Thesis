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
$new_saving = "มี";
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

		if ($row['tourism'] == 1 && $row['score'] > 3) {
// && $row['tourism'] == จังหวัดที่อยากไป
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

	$id_oc = "SELECT * FROM oldcase WHERE id = '$t5'";
	$mathc = $conn->query($oldcase_db);
	$row = $mathc->fetch_assoc();

	echo $row['location'];
	$resultmat = 0;

	if ($new_gender == $row['gender']) {
		$point1 = 10;
		$resultmat += $point1;
	} else {
		$point1 = 0;
		$resultmat += $point1;
	}
	if ($new_age == $row['age']) {
		$point2 = 10;
		$resultmat += $point2;
	} else {
		$point2 = 0;
		$resultmat += $point2;
	}
	if ($new_homeland == $row['homeland']) {
		$point3 = 10;
		$resultmat += $point3;
	} else {
		$point3 = 0;
		$resultmat += $point3;
	}
	if ($new_career == $row['career']) {
		$point4 = 10;
		$resultmat += $point4;
	} else {
		$point4 = 0;
		$resultmat += $point4;
	}
	if ($new_congenital_dis == $row['congenital_dis']) {
		$point5 = 10;
		$resultmat += $point5;
	} else {
		$point5 = 0;
		$resultmat += $point5;
	}
	if ($new_name_congenital_dis == $row['name_congenital_dis']) {
		$point6 = 10;
		$resultmat += $point6;
	} else {
		$point6 = 0;
		$resultmat += $point6;
	}
	if ($new_body_movement == $row['body_movement']) {
		$point7 = 10;
		$resultmat += $point7;
	} else {
		$point7 = 0;
		$resultmat += $point7;
	}
	if ($new_saving == $row['saving']) {
		$point8 = 10;
		$resultmat += $point8;
	} else {
		$point8 = 0;
		$resultmat += $point8;
	}
	if ($new_travel == $row['travel_form']) {
		$point9 = 10;
		$resultmat += $point9;
	} else {
		$point9 = 0;
		$resultmat += $point9;
	}
	if ($new_car == $row['vehicle']) {
		$point10 = 10;
		$resultmat += $point10;
	} else {
		$point10 = 0;
		$resultmat += $point10;
	}
	if ($new_traveltime == $row['travel_time']) {
		$point11 = 10;
		$resultmat += $point11;
	} else {
		$point11 = 0;
		$resultmat += $point11;
	}
	if ($new_camp == $row['camp']) {
		$point12 = 10;
		$resultmat += $point12;
	} else {
		$point12 = 0;
		$resultmat += $point12;
	}
	if ($new_money == $row['charges']) {
		$point13 = 10;
		$resultmat += $point13;
	} else {
		$point13 = 0;
		$resultmat += $point13;
	}
	if ($row['facilities'] == 1) {
		$point14 = 10;
		$resultmat += $point14;
	} else {
		$point14 = 0;
		$resultmat += $point14;
	}

// if (isset($_POST['Size'])) {
	// 	$x = $New_Size;
	// 	$y = $a['size'];
	// 	$sum = 1 - (abs($x - $y) / 3);
	// 	$point2 = $sum * 6;
	// 	$resultmat += $point2;
	// }

	// $sim3 = ($resultmat / 120) * 100;
}

?>