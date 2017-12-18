<?php
// include "include/include_pre.php";
require 'include/db_connect.php';
include 'include/include_head.php';
include 'menu.php';
// session_start();

if (!isSignin()) {
	header("location: singin.php");
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

	header("Location: guide.php");

} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if (isset($_POST['research'])) {

		header("Location: guide.php");

	} elseif (isset($_POST['save_location'])) {

		header("Location: save_location.php");

	}
}

$idUser = $_SESSION['id_user'];
// WHERE us.email = '".$email."'";
// acction จาก guide.php

$new_car        = $_REQUEST['car'];
$new_traveltime = $_REQUEST['traveltime'];
$new_camp       = $_REQUEST['camp'];
$new_money      = $_REQUEST['money'];
$new_travel     = $_REQUEST['travel_form'];
$new_saving     = $_REQUEST['saving'];
$province       = $_REQUEST['check_province'];

$conn_user = "SELECT * FROM info_users WHERE id_user = '".$idUser."'";
$conn_u    = $conn->query($conn_user);
$conUser   = $conn_u->fetch_assoc();

$new_gender              = $conUser['gender'];
$new_age                 = $conUser['age'];
$new_homeland            = $conUser['county'];
$new_career              = $conUser['career'];
$new_congenital_dis      = $conUser['congenital_dis'];
$new_name_congenital_dis = $conUser['name_congenital_dis'];
$new_body_movement       = $conUser['body_movement'];

$oldcase_db = "SELECT * FROM oldcase as oc
        INNER JOIN location as lc on oc.id_location = lc.id_location
        INNER JOIN province as pv on lc.id_province = pv.id_province
        ORDER BY oc.id ASC ";

$key = $conn->query($oldcase_db);

$n1 = 0;
$t1 = "";

$n2 = 0;
$t2 = "";

$n3 = 0;
$t3 = "";

// เลือกที่คล้ายมากสุด
{
	while ($row = $key->fetch_assoc()) {

		$mathtotal = 0;
		$id        = $row['id'];

		// $row['id_province'] == จังหวัดที่อยากไป
		if ($row['province'] == $province) {

			//row['tourism'] == 1 ตรวจสอบจังหวัดที่เคยไป
			if ($row['tourism'] == 1) {

				// เปรียบเทียบ ถ้าโรคประจำตัวและ การเคลื่อนไหวร่างกายตรงกับข้อมูลใน DB จะทำงาน
				if ($new_congenital_dis == $row['congenital_dis'] OR
					$new_name_congenital_dis == $row['name_congenital_dis'] AND
					$new_body_movement == $row['body_movement']) {

					// $row['appropriate'] == 4 || $row['appropriate'] == 5 ตรวจสอบความเหมาะสมเท่ากับ 4 หรือ 5 คะแนน
					// $row['facilities'] == 1 ตรวจสอบสิ่งอำนวยความสะดวก
					if ($row['appropriate'] == 4 OR $row['appropriate'] == 5
						 AND $row['facilities'] == 1) {

						if ($new_gender == $row['gender']) {
							$summath1 = 3;
							$mathtotal += $summath1;
						} else {
							$summath1 = 0;
							$mathtotal += $summath1;
						}
						if ($new_age) {
							if ($new_age >= 1 && $new_age <= 59) {
								$x = 1;
							} elseif ($new_age >= 60 && $new_age <= 69) {
								$x = 2;
							} elseif ($new_age >= 70) {
								$x = 3;
							} else {
								$x = 0;
							}
							$y        = $row['age'];
							$sumage   = 1-(abs($x-$y)/3);
							$summath2 = $sumage*6.3;
							$mathtotal += $summath2;
						}
						if ($new_homeland == $row['homeland']) {
							$summath3 = 4;
							$mathtotal += $summath3;
						} else {
							$summath3 = 0;
							$mathtotal += $summath3;
						}
						if ($new_career == $row['career']) {
							$summath4 = 3.7;
							$mathtotal += $summath4;
						} else {
							$summath4 = 0;
							$mathtotal += $summath4;
						}
						if ($new_congenital_dis == 1) {
							if ($new_name_congenital_dis == $row['name_congenital_dis']) {
								$summath5 = 9;
								$mathtotal += $summath5;
							} else {
								$summath5 = 0;
								$mathtotal += $summath5;
							}
						}
						if ($new_body_movement == $row['body_movement']) {
							$summath6 = 10;
							$mathtotal += $summath6;
						} else {
							$summath6 = 0;
							$mathtotal += $summath6;
						}
						if ($new_saving == $row['saving']) {
							$summath7 = 2.5;
							$mathtotal += $summath7;
						} else {
							$summath7 = 0;
							$mathtotal += $summath7;
						}
						if ($new_travel == $row['travel_form']) {
							$summath8 = 5;
							$mathtotal += $summath8;
						} else {
							$summath8 = 0;
							$mathtotal += $summath8;
						}
						if ($new_car == $row['vehicle']) {
							$summath9 = 6;
							$mathtotal += $summath9;
						} else {
							$summath9 = 0;
							$mathtotal += $summath9;
						}
						if ($new_traveltime) {
							$x             = $new_traveltime;
							$y             = $row['travel_time'];
							$sumtraveltime = 1-(abs($x-$y)/5);
							$summath10     = $sumtraveltime*5.5;
							$mathtotal += $summath10;
						}
						if ($new_camp == $row['camp']) {
							$summath11 = 6;
							$mathtotal += $summath11;
						} else {
							$summath11 = 0;
							$mathtotal += $summath11;
						}
						if ($new_money) {
							$x             = $new_money;
							$y             = $row['charges'];
							$sumtraveltime = 1-(abs($x-$y)/4);
							$summath12     = $sumtraveltime*7;
							$mathtotal += $summath12;
						}
					}
				}
			}

		}

		// เปรียบเทียบค่าหลังจาก query
		if ($mathtotal >= $n1) {
			if ($mathtotal >= $n2) {
				if ($mathtotal >= $n3) {
					$n1 = $n2;
					$t1 = $t2;

					$n2 = $n3;
					$t2 = $t3;

					$n3 = $mathtotal;
					$t3 = $id;
				} else {
					$n1 = $n2;
					$t1 = $t2;

					$n2 = $mathtotal;
					$t2 = $id;
				}
			} else {
				$n1 = $mathtotal;
				$t1 = $id;
			}

		}
	}
}

// echo $t3;
// echo '<br>';

$casemath = "SELECT * FROM oldcase as oc
        INNER JOIN location as lc on oc.id_location = lc.id_location
        INNER JOIN province as pv on lc.id_province = pv.id_province
        WHERE oc.id = $t3";
$key    = $conn->query($casemath);
$answer = $key->fetch_assoc();

$resultmath = 0;

if ($new_gender == $answer['gender']) {
	$summath1 = 3;
	$resultmath += $summath1;
}
if ($new_age) {
	if ($new_age >= 1 && $new_age <= 59) {
		$x = 1;
	} elseif ($new_age >= 60 && $new_age <= 69) {
		$x = 2;
	} elseif ($new_age >= 70) {
		$x = 3;
	} else {
		$x = 0;
	}
	$y        = $answer['age'];
	$sumage   = 1-(abs($x-$y)/3);
	$summath2 = $sumage*6.3;
	$resultmath += $summath2;
}
if ($new_homeland == $answer['homeland']) {
	$summath3 = 4;
	$resultmath += $summath3;
}
if ($new_career == $answer['career']) {
	$summath4 = 3.7;
	$resultmath += $summath4;
}
if ($new_congenital_dis == 1) {
	if ($new_name_congenital_dis == $answer['name_congenital_dis']) {
		$summath5 = 9;
		$resultmath += $summath5;
	}
}
if ($new_body_movement == $answer['body_movement']) {
	$summath6 = 10;
	$resultmath += $summath6;
}
if ($new_saving == $answer['saving']) {
	$summath7 = 2.5;
	$resultmath += $summath7;
}
if ($new_travel == $answer['travel_form']) {
	$summath8 = 5;
	$resultmath += $summath8;
}
if ($new_car == $answer['vehicle']) {
	$summath9 = 6;
	$resultmath += $summath9;
}
if ($new_traveltime) {
	$x             = $new_traveltime;
	$y             = $answer['travel_time'];
	$sumtraveltime = 1-(abs($x-$y)/5);
	$summath10     = $sumtraveltime*5.5;
	$resultmath += $summath10;
}
if ($new_camp == $answer['camp']) {
	$summath11 = 6;
	$resultmath += $summath11;
}
if ($new_money) {
	$x             = $new_money;
	$y             = $answer['charges'];
	$sumtraveltime = 1-(abs($x-$y)/4);
	$summath12     = $sumtraveltime*7;
	$resultmath += $summath12;
}

$result = ($resultmath/68)*100;

$_SESSION['id_location']   = $answer['id_location'];
$_SESSION['name_location'] = $answer['name_location'];
$_SESSION['name_province'] = $answer['name_province'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>แนะนำสถานที่ท่องเที่บง</title>
</head>
<body>

  <section style="padding: 10px 10px;">
    <div class="container">
    	<h3 class="text-center" style="padding: 20px 10px;">ผลการค้นหาสถานที่ท่องเที่ยวคือ</h3>
    	<div class="row">
    		<div class="card mx-auto" style="width: 30rem;">
    			<form action="predict.php" method="post">
    			<img class="card-img-top" src="images/location/<?php echo $answer['img'];?>" alt="Card image cap">
    			<div class="card-body">
    				<h4 class="card-title text-center"><?php echo $answer['name_location'];?></h4>
    				<p class="card-text text-right"><?php echo "จังหวัด : ", $answer['name_province'];?></p>
    				<p class="text-right"><small >ค่าความเหมาะสม : <?php print(number_format($result, 2))."%";?> </small></p>
    			</div>
    			<div class="text-center">
					<button type="submit" class="btn btn-outline-primary" name="research">ค้นหาสถานที่ใหม่</button>
					<button type="submit" class="btn btn-outline-warning" name="save_location">เลือกสถานที่</button>
    				</div>
    			</form>
    		</div>
    	</div>
  </div>

  </section>
</body>
</html>