<?php
function doesystem($param1, $param2) {
	echo $param1-$param2;
}
// doesystem(5, 6);// output 11

$new_gender   = "ชาย";
$new_homeland = "พิษณุโลก";

include 'db_connect.php';
$oldcase_db = "SELECT * FROM oldcase where id = 1";
$key        = $conn->query($oldcase_db);
// $key->num_rows > 0;

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
// เลือกที่คล้ายมากสุด
function call($a, $b, $c, $d, $f) {
	if ($a == $b) {
		$c += $d;
	} else {
		$c += $f;
	}
	echo $c;
}
while ($row = $key->fetch_assoc()) {

	$mathtotal = -1;
	$id        = $row['id'];
	// echo $id;

	// if ($new_gender == $row['gender']) {
	// 	$summath1 = 3;
	// 	$mathtotal += $summath1;
	// 	// echo $mathtotal;
	// } else {
	// 	$summath1 = 0;
	// 	$mathtotal += $summath1;
	// }
	/*
	function call($a, $b, $c, $d, $f) {
	if ($a == $b) {
	$f += $c;
	echo $f;
	} else {
	$f += $d;
	echo $f;
	}

	}
	call($new_gender, $row['gender'], 3, 0, 5);
	echo $f;
	 */

	// echo $mathtotal;

	$aa = call($new_gender, $row['gender'], 1, 3, 0);
	echo "<br>";
	$bb = call($new_homeland, $row['homeland'], 1, 2, 0);
	// echo $f;
}

?>