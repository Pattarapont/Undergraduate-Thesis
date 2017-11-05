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

	$oldcase_db = "SELECT * FROM data_oldcase ORDER BY  `id_data_oldcase` ASC ";
	$inkey = $conn->query($oldcase_db);
	// $id_indexkey = "";
	if ($inkey->num_rows > 0) {
		// output data of each row
		$id_indexkey = array();
		while ($row = $inkey->fetch_assoc()) {

			if ($new_congenital_dis == $row['congenital_dis'] && $new_body_movement == $row['body_movement']) {

				$id_indexkey[] = $row['id_data_oldcase'];
			}
		}

		// เรียก Array ตำแหน่งที่ 81
		// echo $id_indexkey[1];

		print_r($id_indexkey);
		echo "<br>";

		$arrlength = count($id_indexkey);

		for ($i = 0; $i < $arrlength; $i++) {
			echo $id_indexkey[$i];
			echo "<br>";
		}
	}
}

indexkey($conn);

function matching($conn) {
	// SQL JOIN 5 TABLE

	$jointable_db = "SELECT * FROM data_oldcase
    JOIN data_phitsanulok ON data_phitsanulok.id_phitsanulok =
        data_oldcase.id_phitsanulok
    JOIN data_phetchabun ON data_phetchabun.id_phetchabun =
        data_phitsanulok.id_phetchabun
    JOIN data_chiangmai ON data_chiangmai.id_chiangmai =
        data_phetchabun.id_chiangmai
    JOIN data_chiangrai ON data_chiangrai.id_chiangrai =
        data_chiangmai.id_chiangrai
    WHERE id_data_oldcase";

	// เรียกใช้ function indexkey($conn)
	// indexkey($conn);

	// วนลูปของแถว
	$result = $conn->query($jointable_db);
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {

			// data_oldcase
			// gender
			if ($new_gender == $row['gender']) {
				$summath1 = 3.0;
				$mathtotal += $summath1;
			} else {
				$summath1 = 0;
				$mathtotal += $summath1;
			}

			// age
			if ($new_age == $row['age']) {
				$summath2 = 6.3;
				$mathtotal += $summath2;
			} else {
				$summath2 = 0;
				$mathtotal += $summath2;
			}

			// province
			if ($new_province == $row['province']) {
				$summath3 = 4.0;
				$mathtotal += $summath3;
			} else {
				$summath3 = 0;
				$mathtotal += $summath3;
			}

			// career
			if ($new_career == $row['career']) {
				$summath4 = 3.7;
				$mathtotal += $summath4;
			} else {
				$summath4 = 0;
				$mathtotal += $summath4;
			}

			// congenital_dis
			if ($new_congenital_dis == $row['congenital_dis']) {
				$summath5 = 9.0;
				$mathtotal += $summath5;
			} else {
				$summath5 = 0;
				$mathtotal += $summath5;
			}

			/*
				            // name_congenital_dis
				            if ($new_name_congenital_dis == $row['name_congenital_dis']) {
				                $summath6 = 9;
				                $mathtotal += $summath6;
				            } else {
				                $summath6 = 0;
				                $mathtotal += $summath6;
				            }
			*/

			// body_movement
			if ($new_body_movement == $row['body_movement']) {
				$summath6 = 10.0;
				$mathtotal += $summath6;
			} else {
				$summath6 = 0;
				$mathtotal += $summath6;
			}

			// ตรวจสอบว่าเคยไปพิษณุโลกไหม
			// 0 = ไม่เคย   1 = เคย

			if ($row['tourism_PLK'] == 1) {

				if ($new_travel == $row['travel_form_PLK']) {
					$summath7 = 5.0;
					$mathtotal += $summath7;
				} else {
					$summath7 = 0;
					$mathtotal += $summath7;
				}

				if ($new_car == $row['vehicle_PLK']) {
					$summath8 = 6.0;
					$mathtotal += $summath8;
				} else {
					$summath8 = 0;
					$mathtotal += $summath8;
				}

				if ($new_traveltime == $row['travel_time_PLK']) {
					$summath9 = 5.5;
					$mathtotal += $summath9;
				} else {
					$summath9 = 0;
					$mathtotal += $summath9;
				}

				if ($new_camp == $row['camp_PLK']) {
					$summath10 = 6.0;
					$mathtotal += $summath10;
				} else {
					$summath10 = 0;
					$mathtotal += $summath10;
				}

				if ($new_money == $row['charges_PLK']) {
					$summath11 = 7.0;
					$mathtotal += $summath11;
				} else {
					$summath11 = 0;
					$mathtotal += $summath11;
				}

				// เก็บค่าในรูปแบบ Array 2 มิติ
				// $response [x][y] = x คือ ตำแหน่งแถว y คือ ตำแหน่งคอลัมม์
				for ($location_PLK = 0; $location_PLK < xxx; $location_PLK++) {

					if ($row['score_WatYai'] > 3) {
						$summath1 = 9;
						$mathtotal += $summath1;

						if ($row['facilities_WatYai']) {
							$summath1 = 9;
							$mathtotal += $summath1;
						}
					} else {
						$summath1 = 0;
						$mathtotal += $summath1;
					}

					if ($row['score_ThaweeFolkMuseum'] > 3) {
						$summath1 = 9;
						$mathtotal += $summath1;

						if ($row['facilities_ThaweeFolkMuseum']) {
							$summath1 = 9;
							$mathtotal += $summath1;
						}

					} else {
						$summath1 = 0;
						$mathtotal += $summath1;
					}

					if ($row['score_WatChulamanee'] > 3) {
						$summath1 = 9;
						$mathtotal += $summath1;

						if ($row['facilities_WatChulamanee']) {
							$summath1 = 9;
							$mathtotal += $summath1;
						}

					} else {
						$summath1 = 0;
						$mathtotal += $summath1;
					}

					if ($row['a'] > 3) {
						$summath1 = 9;
						$mathtotal += $summath1;

						if ($row['score_SanSomdej']) {
							$summath1 = 9;
							$mathtotal += $summath1;
						}

					} else {
						$summath1 = 0;
						$mathtotal += $summath1;
					}

				}

			} // จบการทำงานคำนวนสถานที่พิษณุโลกห

			if ($row['tourism_phetchabun'] == 1) {

			}

			if ($row['tourism_chiangmai'] == 1) {

			}

			if ($row['tourism_chiangrai'] == 1) {

			}

			//     $mathtotal = 0 ;

			//     // โรคประจำตัว = 9.0
			//     if ($new_congenital_dis == $row['congenital_dis']) {
			//         $summath1 = 9;
			//         $mathtotal += $summath1;
			//     } else {
			//         $summath1 = 0;
			//         $mathtotal += $summath1;
			//     }
			//     // การเคลื่อนไหวร่างกาย = 10.0
			//     if ($new_body_movement == $row['body_movement']) {
			//         $summath2 = 10;
			//         $mathtotal += $summath2;
			//     } else {
			//         $summath2 = 0;
			//         $mathtotal += $summath2;
			//     }
			//     // ฟังก์ชันคำนวน ??????????????

			//     $n1 = 0;
			//        $t1 = "";

			//        $n2 = 0;
			//        $t2 = "";

			//        $n3 = 0;
			//        $t3 = "";

			//     if ($mathtotal >= $n1){
			//               if ($mathtotal >= $n2) {
			//                     if ($mathtotal >= $n3) {
			//                         $n1 = $n2;
			//                         $t1 = $t2;

			//                         $n2 = $n3;
			//                         $t2 = $t3;

			//                         $n3 = $mathtotal;
			//                         $t3 = $num1;
			//                       }else{
			//                         $n1 = $n2;
			//                         $t1 = $t2;

			//                         $n2 = $mathtotal;
			//                         $t2 = $num1;
			//                       }
			//                 }else{
			//               $n1 = $mathtotal;
			//               $t1 = $num1;
			//               }
			//           }

		}

	}

}

matching($conn);
?>