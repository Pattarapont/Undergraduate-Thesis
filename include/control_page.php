<?php
include 'control_user.php';

if (!isSignin()) {
	echo "No User";
	header("Location: /et_cbr/singin.php");
} else {
	header("Location: /et_cbr/guide.php");
}

?>