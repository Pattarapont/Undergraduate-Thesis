<?php
include 'include_pre.php';

// $new_car        = $_POST['car'];
// $new_traveltime = $_POST['traveltime'];
// $new_camp       = $_POST['camp'];
// $new_money      = $_POST['money'];
// $new_travel     = $_POST['travel_form'];
// $new_saving     = $_POST['saving'];
// $province       = $_POST['check_province'];

$new_car        = $conn->real_escape_string($_REQUEST['car']);
$new_traveltime = $conn->real_escape_string($_REQUEST['traveltime']);
$new_camp       = $conn->real_escape_string($_REQUEST['camp']);
$new_money      = $conn->real_escape_string($_REQUEST['money']);
$new_travel     = $conn->real_escape_string($_REQUEST['travel_form']);
$new_saving     = $conn->real_escape_string($_REQUEST['saving']);
$province       = $conn->real_escape_string($_REQUEST['check_province']);
//
header("Location: /et_cbr/predict.php");
die();
?>