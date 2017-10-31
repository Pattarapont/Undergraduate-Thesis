<?php
include 'db_connect.php';
include 'getvariable.php';

/*
$sql_DataOldcase = "SELECT * FROM data_oldcase WHERE id_data_oldcase = 1";

$sql_DataPhitsanulok = "SELECT * FROM data_phitsanulok";
$sql_DataPhetchabun  = "SELECT * FROM data_phetchabun";
$sql_DataChiangMai   = "SELECT * FROM data_chiangmai ";
$sql_DataChiangRai   = "SELECT * FROM data_chiangrai ";
 */

// function indexkey($conn) {
	/*
	โรคประจำตัว = 9.0
	การเคลื่อนไหวร่างกาย = 10.0
	 */
	
	$oldcase_db = "SELECT * FROM data_oldcase ORDER BY  `id_data_oldcase` ASC ";
	$result     = $conn->query($oldcase_db);
	$id_indexkey = "";
	if ($result->num_rows > 0) {
		// output data of each row
	$id_indexkey = array();
		while ($row = $result->fetch_assoc()) {

			if ($new_congenital_dis == $row['congenital_dis'] && $new_body_movement == $row['body_movement']) {

					$id_indexkey[] = $row['id_data_oldcase']; 
					// echo $id_indexkey;
					// echo "<br>";

			} else {
				// ไม่นำ id มาคำนวน
			}	
		}
		print_r($id_indexkey);
		// echo $id_indexkey;
		
	}

/*
// คำนวนค่า
	if ($result->num_rows > 0) {
		// output data of each row
		while ($row = $result->fetch_assoc()) {

			$result_indexkey = 0 ;

			// โรคประจำตัว = 9.0
			if ($new_congenital_dis == $row['congenital_dis']) {
				$summath1 = 9;
				$result_indexkey += $summath1;
			} else {
				$summath1 = 0;
				$result_indexkey += $summath1;
			}
			// การเคลื่อนไหวร่างกาย = 10.0
			if ($new_body_movement == $row['body_movement']) {
				$summath2 = 10;
				$result_indexkey += $summath2;
			} else {
				$summath2 = 0;
				$result_indexkey += $summath2;
			}
			// ฟังก์ชันคำนวน ??????????????

			$n1 = 0;
	        $t1 = "";

	        $n2 = 0;
	        $t2 = "";

	        $n3 = 0;
	        $t3 = "";

			if ($result_indexkey >= $n1){
                if ($result_indexkey >= $n2) {
                      if ($result_indexkey >= $n3) {
                          $n1 = $n2;
                          $t1 = $t2;

                          $n2 = $n3;
                          $t2 = $t3;

                          $n3 = $result_indexkey;
                          $t3 = $num1;
                        }else{
                          $n1 = $n2;
                          $t1 = $t2;

                          $n2 = $result_indexkey;
                          $t2 = $num1;
                        }
                  }else{
                $n1 = $result_indexkey;
                $t1 = $num1;
                }  
            }

		}

		// $keyindex = ;
		// return $keyindex;

	} 
	// else {
	// 	echo "0 results";
	// }
}
*/
// }

// indexkey($conn);

?>
