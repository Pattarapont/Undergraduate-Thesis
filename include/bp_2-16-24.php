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
// $id_row = "";
if ($inkey->num_rows > 0) {

	while ($row = $inkey->fetch_assoc()) {
		$id_row = array();
		// ตรวจสอบว่าเคยไปเที่ยวหรือไม่
		if ($row['tourism'] == 1) {
			// ตรวจสอบ ข้อมูลโรคประจำตัว และ การเคลื่อนไหวร่างกาย
			if ($new_congenital_dis == $row['congenital_dis']
				&& $new_body_movement == $row['body_movement']) {

				// นำ id ที่ได้ เก็บใน Array
				// $id_row[] = $row['id'];
				$id_row[] = $row['id'];

			}

		}
	}
	print_r($id_row);
	$arrlength = count($id_row);
	// echo $id_row[1];

	// print_r($id_row);
	// for ($i = 0; $i < $arrlength; $i++) {
	// 	echo $id_row[$i];
	// 	echo "<br>";
	// }

	// print_r($id_row);
	// $arrlength = count($id_row);

	// print_r($id_row);

/*
while ($row = $inkey->fetch_assoc()) {
$arrlength = count($id_row);
for ($i = 0; $i < $arrlength; $i++) {

echo $id_row[$i];
if ($new_congenital_dis == $row['congenital_dis']) {
echo 'aas';
}
if ($new_movement = $row['body_movement']) {
echo 'ahhhhhhhhhhh';

}

$congenital_dis = $row['congenital_dis'];
$body_movement = $row['body_movement'];
echo $congenital_dis, $body_movement;
echo "<br>";
}

}
 */
}

$oldcase_db = "SELECT * FROM oldcase WHERE id = '$arrlength' ";
if ($inkey->num_rows > 0) {
	while ($row = $inkey->fetch_assoc()) {
		for ($i = 0; $i < $arrlength; $i++) {
			echo $id_row[$i];
			echo "<br>";
		}
	}
}
?>