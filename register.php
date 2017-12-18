<?php
/* Registration process, inserts user info into the database
and sends account confirmation email message
 */

// Set session variables to be used on profile.php page
$_SESSION['email']      = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name']  = $_POST['lastname'];

// Escape all $_POST variables to protect against SQL injections
$first_name = $conn->escape_string($_POST['firstname']);
$last_name  = $conn->escape_string($_POST['lastname']);
$email      = $conn->escape_string($_POST['email']);
$password   = $conn->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash       = $conn->escape_string(md5(rand(0, 1000)));
$active     = 1;
// Check if user with that email already exists
$result = $conn->query("SELECT * FROM users WHERE email='$email'") or die($conn->error());

// We know user email exists if the rows returned are more than 0
if ($result->num_rows > 0) {

	$_SESSION['message'] = 'E-mail นี้มีในระบบแล้ว';
	header("location: error.php");

} else {

	// Email doesn't already exist in a database, proceed...

	// active is 0 by DEFAULT (no need to include it here)
	$sql = "INSERT INTO users (first_name, last_name, email, password, hash, active) "
	."VALUES ('$first_name','$last_name','$email','$password', '$hash' ,'$active')";

	// Add user to the database
	if ($conn->query($sql) == true) {
		// $_SESSION['id_user']   = 50;
		// $_SESSION['email']     = $email;
		$_SESSION['active']    = 1;//0 until user activates their account with verify.php
		$_SESSION['logged_in'] = true;// So we know the user has logged in
		$_SESSION['message']   = "Confirmation link has been sent to $email, please verify
		your account by clicking on the link in the message!";

		// INSERT id_user to info_users โดยนับจาก id_user ล่าสุด
		$info = "INSERT INTO info_users (id_user)
				VALUES (LAST_INSERT_ID())";
		$conn->query($info);

		$idUser = "SELECT * FROM users as us
            INNER JOIN info_users as info on us.id_user = info.id_user
            WHERE us.email = '".$email."'";
		$result = $conn->query($idUser);
		$callID = $result->fetch_assoc();

		$_SESSION['id_user'] = $callID['id_user'];

		// echo $_SESSION['id_user'];
		/*
		$user = "SELECT * FROM users as us WHERE us.email = $email";
		echo $email;
		 */
		// echo $_SESSION['email'];
		// echo $_SESSION['email'];
		// echo "a878564aa";
		/*
		// Send registration confirmation link (verify.php)
		$to           = $email;
		$subject      = 'Account Verification ( Pattarapon )';
		$message_body = '
		Hello '.$first_name.',

		Thank you for signing up!
		โปรดคลิ๊กที่

		Please click this link to activate your account:

		http://localhost:8080/et_cbr/verify.php?email='.$email.'&hash='.$hash;

		mail($to, $subject, $message_body);
		 */
		// header("location: profile.php");
		// header("Refresh:0.7; url=/et_cbr/account.php");

		header("location: account.php");
	} else {
		$_SESSION['message'] = 'Registration failed!';
		header("location: error.php");
	}

}