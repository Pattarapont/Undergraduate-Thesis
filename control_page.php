<?php

include 'control_user.php';

if (!isSignin()) {
	echo "No User";
	header("Location: singin.php");
} else {
	header("Location: guide.php");
}

?>