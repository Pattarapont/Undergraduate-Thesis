<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Error</title>
<?php include 'css/css.html';?>
</head>
<body>
<div class="form">
    <h1>ผิดพลาด!!</h1>
    <p>
<?php
if (isset($_SESSION['message']) AND !empty($_SESSION['message'])):
echo $_SESSION['message'];
 else :
header("location: singin.php");
endif;
?>
</p>
    <a href="singin.php"><button class="button button-block"/>เข้าสู่ระบบ</button></a>
</div>
</body>
</html>
