<?php
include 'db_connect.php';
include 'getvariable.php';

// $new_congenital_dis     = "ไม่มี";
// $new_body_movement         = "เดินได้ปกติ";

function indexkey($conn)
{
    /*
    โรคประจำตัว = 9.0
    การเคลื่อนไหวร่างกาย = 10.0
    */
    
    $new_congenital_dis = "ไม่มี";
    $new_body_movement  = "เดินได้ปกติ";
    
    $oldcase_db = "SELECT * FROM data_oldcase ORDER BY  `id_data_oldcase` ASC ";
    $inkey      = $conn->query($oldcase_db);
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

function matching($conn){
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

            	// olacase col 1
                if ($new_gender == $row['gender']) {
                    $summath1 = 9;
                    $inkey_indexkey += $summath1;
                } else {
                    $summath1 = 0;
                    $inkey_indexkey += $summath1;
                }

            	// olacase col 2
                if ($new_age == $row['age']) {
                    $summath1 = 9;
                    $inkey_indexkey += $summath1;
                } else {
                    $summath1 = 0;
                    $inkey_indexkey += $summath1;
                }

                // olacase col 3
                if ($new_province == $row['province']) {
                    $summath1 = 9;
                    $inkey_indexkey += $summath1;
                } else {
                    $summath1 = 0;
                    $inkey_indexkey += $summath1;
                }

                // olacase col 1
                if ($new_career == $row['career']) {
                    $summath1 = 9;
                    $inkey_indexkey += $summath1;
                } else {
                    $summath1 = 0;
                    $inkey_indexkey += $summath1;
                }

                // olacase col 1
                if ($new_congenital_dis == $row['congenital_dis']) {
                    $summath1 = 9;
                    $inkey_indexkey += $summath1;
                } else {
                    $summath1 = 0;
                    $inkey_indexkey += $summath1;
                }

                // olacase col 1
                if ($new_name_congenital_dis == $row['name_congenital_dis']) {
                    $summath1 = 9;
                    $inkey_indexkey += $summath1;
                } else {
                    $summath1 = 0;
                    $inkey_indexkey += $summath1;
                }

                // olacase col 1
                if ($new_body_movement == $row['body_movement']) {
                    $summath1 = 9;
                    $inkey_indexkey += $summath1;
                } else {
                    $summath1 = 0;
                    $inkey_indexkey += $summath1;
                }

                // ตรวจสอบว่าเคยไปพิษณุโลกไหม
                // 0 = ไม่เคย
                // 1 = เคย
                
                if ($row['tourism_PLK'] == 1) {
                	if ($new_travel == $row['travel_PLK']) {
                    $summath1 = 9;
                    $inkey_indexkey += $summath1;
                	} else {
                    $summath1 = 0;
                    $inkey_indexkey += $summath1;
                	}

                	if ($new_car == $row['car_PLK']) {
                    $summath1 = 9;
                    $inkey_indexkey += $summath1;
                	} else {
                    $summath1 = 0;
                    $inkey_indexkey += $summath1;
                	}

                	if ($new_traveltime == $row['traveltime_PLK']) {
                    $summath1 = 9;
                    $inkey_indexkey += $summath1;
                	} else {
                    $summath1 = 0;
                    $inkey_indexkey += $summath1;
                	}

                	if ($new_camp == $row['camp_PLK']) {
                    $summath1 = 9;
                    $inkey_indexkey += $summath1;
                	} else {
                    $summath1 = 0;
                    $inkey_indexkey += $summath1;
                	}

                	if ($new_money == $row['money_phitsanulok']) {
                    $summath1 = 9;
                    $inkey_indexkey += $summath1;
                	} else {
                    $summath1 = 0;
                    $inkey_indexkey += $summath1;
                	}

                	for ($locat_PLK = 0; $locat_PLK < ????; $locat_PLK++) {

	                	if ($row[''] > 3 ) {
                    	$summath1 = 9;
                    	$inkey_indexkey += $summath1;
                		} else {
	                    $summath1 = 0;
	                    $inkey_indexkey += $summath1;
	                	}

	               		else if ($row[''] > 3 ) {
                    	$summath1 = 9;
                    	$inkey_indexkey += $summath1;
                		} else {
	                    $summath1 = 0;
	                    $inkey_indexkey += $summath1;
	                	}

	                	if ($row[''] > 3 ) {
                    	$summath1 = 9;
                    	$inkey_indexkey += $summath1;
                		} else {
	                    $summath1 = 0;
	                    $inkey_indexkey += $summath1;
	                	}

	                	if ($row[''] > 3 ) {
                    	$summath1 = 9;
                    	$inkey_indexkey += $summath1;
                		} else {
	                    $summath1 = 0;
	                    $inkey_indexkey += $summath1;
	                	}
                		
                	}

                } // จบการทำงานคำนวนสถานที่พิษณุโลกห

                
                if ($row['tourism_phetchabun'] == 1) {
                	
                }

                if ($row['tourism_chiangmai'] == 1) {
                	
                }
                
                if ($row['tourism_chiangrai'] == 1) {
                	
                }
            
            //     $inkey_indexkey = 0 ;
            
            //     // โรคประจำตัว = 9.0
            //     if ($new_congenital_dis == $row['congenital_dis']) {
            //         $summath1 = 9;
            //         $inkey_indexkey += $summath1;
            //     } else {
            //         $summath1 = 0;
            //         $inkey_indexkey += $summath1;
            //     }
            //     // การเคลื่อนไหวร่างกาย = 10.0
            //     if ($new_body_movement == $row['body_movement']) {
            //         $summath2 = 10;
            //         $inkey_indexkey += $summath2;
            //     } else {
            //         $summath2 = 0;
            //         $inkey_indexkey += $summath2;
            //     }
            //     // ฟังก์ชันคำนวน ??????????????
            
            //     $n1 = 0;
            //        $t1 = "";
            
            //        $n2 = 0;
            //        $t2 = "";
            
            //        $n3 = 0;
            //        $t3 = "";
            
            //     if ($inkey_indexkey >= $n1){
            //               if ($inkey_indexkey >= $n2) {
            //                     if ($inkey_indexkey >= $n3) {
            //                         $n1 = $n2;
            //                         $t1 = $t2;
            
            //                         $n2 = $n3;
            //                         $t2 = $t3;
            
            //                         $n3 = $inkey_indexkey;
            //                         $t3 = $num1;
            //                       }else{
            //                         $n1 = $n2;
            //                         $t1 = $t2;
            
            //                         $n2 = $inkey_indexkey;
            //                         $t2 = $num1;
            //                       }
            //                 }else{
            //               $n1 = $inkey_indexkey;
            //               $t1 = $num1;
            //               }  
            //           }
            
        }
        
    }
    
}


matching($conn);
?>