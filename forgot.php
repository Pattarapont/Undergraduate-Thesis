<?php
/* Reset your password form, sends reset.php password link */
require './include/db_connect.php'
;
session_start();

// Check if form submitted with method="post"
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$email  = $conn->escape_string($_POST['email']);
	$result = $conn->query("SELECT * FROM users WHERE email='$email'");

	if ($result->num_rows == 0)// User doesn't exist
	{
		$_SESSION['message'] = "อีเมลนี้ไม่มีอยู่ในระบบ!!";
		header("location: error.php");
	} else {
		// User exists (num_rows != 0)

		$user = $result->fetch_assoc();// $user becomes array with user data

		$email      = $user['email'];
		$hash       = $user['hash'];
		$first_name = $user['first_name'];

		// Session message to display on success.php
		$_SESSION['message'] = "<p>ได้โปรดตรวจสอบเมล์ของคุณ <span>$email</span>"
		 ." สำหรับยืนยันการรีเซ็ทรหัสผ่านใหม่!</p>";

		// Send registration confirmation link (reset.php)
		$to           = $email;
		$subject      = 'Password Reset Link ( pattarapon.me )';
		$message_body = '
        Hello '.$first_name.',

        You have requested password reset!

        Please click this link to reset your password:

        http://localhost/login-system/reset.php?email='.$email.'&hash='.$hash;

		mail($to, $subject, $message_body);

		header("location: success.php");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Reset Your Password</title>
<?php
include 'include/include_head.php';
include 'css/css.html';?>
</head>

<body>

  <div class="form">

    <h1>รีเซ็ท รหัสผ่าน</h1>

    <form action="forgot.php" method="post">
     <div class="field-wrap">
      <label>
        Email Address<span class="req">*</span>
      </label>
      <input type="email"required autocomplete="off" name="email"/>
    </div>
    <button class="button button-block"/>รีเซ็ท</button>
    </form>
  </div>

    <script src="./js/jquery-3.2.1.min.js"></script>
	<script src="./js/login.js"></script>
</body>

</html>
