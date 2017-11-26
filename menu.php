<?
include "control_user.php";

if (isSignin() !== TRUE) {
	include "menu_unauth.php";
} else {
	include "menu_auth.php";
}

?>
