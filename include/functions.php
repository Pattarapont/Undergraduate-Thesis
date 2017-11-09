<?php
include 'db_connect.php';
include 'getvariable.php';

// function indexkey($conn) {

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
	$id_oc = array();
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

	// เรียก Array ตำแหน่งที่ 81
	// echo $id_oc[1];

	print_r($id_oc);
	// echo "<br>";

	$arrlength = count($id_oc);
	// $arrlength เก็บเลขตำแหน่ง array ไม่ได้เก็บ id
	echo $arrlength, 'จำนวน array <br>';
	// echo $row['congenital_dis'];

}
// if ($inkey->num_rows > $arrlength) {
// $ids = $id_oc[$i];
$oc_db = "SELECT * FROM oldcase WHERE id = '$id_oc[1]' ";
$conn_oc = $conn->query($oldcase_db);
// echo $row['id'];

for ($i = 0; $i < $arrlength; $i++) {
	// echo $id_oc[$i];
	// echo "<br>";

// อยากให้เอา id ที่อยีใน id index มาตรวจสอบ

	if ($id_oc[$i] != $row['id']) {

		// $a = $row['congenital_dis'];
		// echo $a;

		echo $id_oc[$i];
		// echo 'ออกมาสิครับ';
		echo "<br>";

	}

}
// }
// }

// indexkey($conn);
?>