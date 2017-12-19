<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

	header("Location: /et_cbr/guide.php");

} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if (isset($_POST['research'])) {

		header("Location: /et_cbr/guide.php");

	} elseif (isset($_POST['save'])) {

		header("Location: save_record.php");

	}
}
?>