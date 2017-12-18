<?php
include 'include/db_connect.php';

session_start();

echo $id_location = $_SESSION['ca_id_location'];
echo $_SESSION['ca_name_location'];
echo $_SESSION['ca_name_province'];
echo $idUser = $_SESSION['id_user'];

$s_location = "INSERT INTO transcript (id_user, id_location)
		VALUES ('$idUser', '$id_location')";

if ($conn->query($s_location) === true) {

	// header("Location: history.php");
	// die();

} else {
	echo "ERROR: Could not able to execute $sql. " .$mysqli->error;
}
?>