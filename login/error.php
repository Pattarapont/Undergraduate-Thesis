<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
<?php include 'css/css.html';?>
</head>
<body>
<div class="form">
    <h1>Error</h1>
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
