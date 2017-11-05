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

	$n1 = 0;
	$t1 = "";

	$n2 = 0;
	$t2 = "";

	$n3 = 0;
	$t3 = "";

	$n4 = 0;
	$t4 = "";

	$n5 = 0;
	$t5 = "";

	if ($inkey->num_rows > 0) {
		// output data of each row
		$id_indexkey = array();
		while ($row = $inkey->fetch_assoc()) {

			if ($new_congenital_dis == $row['congenital_dis'] && $new_body_movement == $row['body_movement'] && $row['tourism'] == 1) {

				$id_indexkey[] = $row['id'];
			}
		}

		// เรียก Array ตำแหน่งที่ 81
		// echo $id_indexkey[1];

		print_r($id_indexkey);
		// echo "<br>";

		$arrlength = count($id_indexkey);
		$mathtotal = 0;

		$total = $arrlength;

		for ($i = 0; $i < $arrlength; $i++) {
			// echo $id_indexkey[$i];
			// echo "<br>";

			if ($new_congenital_dis == $row['congenital_dis']) {
				$summath1 = 9.0;
				$mathtotal += $summath1;
			} else {
				$summath1 = 0;
				$mathtotal += $summath1;
			}
			if ($new_body_movement == $row['body_movement']) {
				$summath2 = 10.0;
				$mathtotal += $summath2;
			} else {
				$summath2 = 0;
				$mathtotal += $summath2;
			}
			if ($new_congenital_dis == $row['congenital_dis']) {
				$summath1 = 3;
				$mathtotal += $summath1;
			} else {
				$summath1 = 0;
				$mathtotal += $summath1;
			}

			// เปรียบเทียบค่าหลังจาก query
			if ($mathtotal >= $n1) {
				if ($mathtotal >= $n2) {
					if ($mathtotal >= $n3) {
						if ($mathtotal >= $n4) {
							if ($mathtotal >= $n5) {
								$n1 = $n2;
								$t1 = $t2;

								$n2 = $n3;
								$t2 = $t3;

								$n3 = $n4;
								$t3 = $t4;

								$n4 = $n5;
								$t4 = $t5;

								$n5 = $mathtotal;
								$t5 = $total;
							} else {
								$n1 = $n2;
								$t1 = $t2;

								$n2 = $n3;
								$t2 = $t3;

								$n3 = $n4;
								$t3 = $t4;

								$n3 = $mathtotal;
								$t3 = $total;
							}
						} else {
							$n1 = $n2;
							$t1 = $t2;

							$n2 = $n3;
							$t2 = $t3;

							$n2 = $mathtotal;
							$t2 = $total;
						}
					} else {
						$n1 = $n2;
						$t1 = $t2;

						$n2 = $mathtotal;
						$t2 = $total;
					}
				} else {
					$n1 = $mathtotal;
					$t1 = $total;
				}
			}
		}
	}
}

indexkey($conn);

?>