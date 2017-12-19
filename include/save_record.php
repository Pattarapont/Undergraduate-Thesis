<?php
include 'db_connect.php';
include 'include_head.php';
// include 'menu.php';
session_start();
$idUser      = $_SESSION['id_user'];
$id_location = $_SESSION['ca_id_location'];
$_SESSION['ca_name_location'];

$s_location = "INSERT INTO transcript (id_user, id_location)
VALUES ('$idUser', '$id_location')";

if ($conn->query($s_location) === true) {
	header("Location: /et_cbr/history.php");
	die();

}

?>