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
$inkey = $conn->query($oldcase_db);
// $id_oc = "";
if ($inkey->num_rows > 0) {
	// output data of each row

	while ($row = $inkey->fetch_assoc()) {
		if ($row['tourism'] == 1) {
			if ($new_congenital_dis == $row['congenital_dis']
				&& $new_body_movement == $row['body_movement']) {

				$id_oc[] = $row['id'];
				// echo $row['charges'];
				// echo $row['congenital_dis'];
				// echo $row['province'];
			}
		}
		// echo $row['congenital_dis'];
	}
}

?>