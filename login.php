<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections

$email  = $conn->escape_string($_POST['email']);
$result = $conn->query("SELECT * FROM users WHERE email='$email'");

if ($result->num_rows == 0) {
	// User doesn't exist
	$_SESSION['message'] = "email นี้ไม่มีในระบบ";
	header("location: error.php");
} else {
	// User exists
	$user = $result->fetch_assoc();

	if (password_verify($_POST['password'], $user['password'])) {
		$_SESSION['id_user']    = $user['id_user'];
		$_SESSION['email']      = $user['email'];
		$_SESSION['first_name'] = $user['first_name'];
		$_SESSION['last_name']  = $user['last_name'];
		$_SESSION['active']     = $user['active'];

		// This is how we'll know the user is logged in
		$_SESSION['logged_in'] = true;

		$user = "SELECT * FROM users as us
					INNER JOIN info_users as info on us.id_user = info.id_user
					WHERE us.id_user = '".$_SESSION['id_user']."'";
		$db  = $conn->query($user);
		$row = $db->fetch_assoc();

		// ตรวจสอบว่าถ้าข้อมูลที่นำไปคำนวนว่าง ให้ไปกรอกข้อมูลก่อน
		if ($row['gender'] == NULL OR $row['age'] == NULL OR $row['career'] == NULL
			 OR $row['county'] == NULL OR $row['congenital_dis'] == NULL OR $row['body_movement'] == NULL) {

			header("location: account.php");

		} else {

			header("location: guide.php");

		}

	} else {
		$_SESSION['message'] = "คุณป้อนรหัสผ่านไม่ถูกต้อง, กรุณาลองอีกครั้ง!";
		header("location: error.php");
	}
}

$conn->close();
