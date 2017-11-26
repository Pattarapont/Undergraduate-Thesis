<?php
include './include/include_head.php';

// สงวนสิทธิ์เฉพาะสมาชิก
include "include/include_pre.php";
/*
session_start();
if (!isSignin()) {
header("location: singin.php");
}
 */
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
include 'navbar.php';
// include 'form_input_personal.php';
include 'form_input_location.php';
?>


</body>
</html>