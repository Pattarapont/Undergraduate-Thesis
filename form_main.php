<!DOCTYPE html>
<html>
<head>
<?php
include './include/include_head.php';
// สงวนสิทธิ์เฉพาะสมาชิก
/*
session_start();
if ($_SESSION['logged_in'] !== true) {
header("location: singin.php");
}
 */
?>
</head>
<body>
<?php
include 'navbar.php';
// include 'form_input_personal.php';
include 'form_input_location.php';
?>


</body>
</html>