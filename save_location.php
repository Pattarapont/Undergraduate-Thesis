<?php
include 'include/db_connect.php';
session_start();

$id_location = $_SESSION['id_location'];
// echo $id_location;
echo "<h1>" . $id_location . "</h1>";

$s_location = "INSERT INTO transcript (id_user, id_location, memo_detail, save_date , year)
				VALUES ('1', '$id_location ', 'a', 'b', 'c')";

if ($conn->query($s_location) === true) {
	// echo "Records inserted successfully.";
	// header("Location: /et_cbr/guide.php");
	die();
} else {
	echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>save</title>
	<link rel="stylesheet" href="">
</head>
<body>
<h1>

</h1>
</body>
</html>