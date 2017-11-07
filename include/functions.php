<?php
include 'db_connect.php';
include 'getvariable.php';

// $new_congenital_dis     = "ไม่มี";
// $new_body_movement         = "เดินได้ปกติ";

function indexkey($conn) {
	/*
		    โรคประจำตัว = 9.0p
		    การเคลื่อนไหวร่างกาย = 10.0
	*/

	$new_congenital_dis = "ไม่มี";
	$new_body_movement = "เดินได้ปกติ";

	$oldcase_db = "SELECT * FROM oldcase ORDER BY `id` ASC ";
	$inkey = $conn->query($oldcase_db);
	// $id_indexkey = "";
	if ($inkey->num_rows > 0) {
		// output data of each row
		$id_indexkey = array();
		while ($row = $inkey->fetch_assoc()) {
			if ($row['tourism'] == 1) {
				if ($new_congenital_dis == $row['congenital_dis'] && $new_body_movement == $row['body_movement']) {

					$id_indexkey[] = $row['id'];
					// echo $row['charges'];
					// echo $row['congenital_dis'];
					// echo $row['province'];
				}
			}
			// echo $row['congenital_dis'];

		}

		// เรียก Array ตำแหน่งที่ 81
		// echo $id_indexkey[1];

		print_r($id_indexkey);
		echo "<br>";

		$arrlength = count($id_indexkey);
		// $arrlength เก็บเลขตำแหน่ง array ไม่ได้เก็บ id
		echo $arrlength, 'เลขตำแหน่ง array <br>';
		echo $row['congenital_dis'];

		for ($i = 0; $i < $arrlength; $i++) {
			echo $id_indexkey[$i];
			// echo "<br>";

			// อยากให้เอา id ที่อยีใน id index มาตรวจสอบ
			if ($arrlength[$i] == $row['id']) {
				/*
					$a = $row['congenital_dis'];
					echo $a;
				*/
				echo 'ออกมาสิครับ';
				echo "<br>";

			}
		}

	}
}

indexkey($conn);
?>