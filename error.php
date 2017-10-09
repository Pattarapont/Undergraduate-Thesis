<?php
/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
<?php include './include/include_head.php';?>
</head>
<body>
<div class="form">
    <h1>Error</h1>
    <p>
<?php
if (isset($_SESSION['message']) AND !empty($_SESSION['message'])):
echo $_SESSION['message'];
 else :
header("location: account.php");
endif;
?>
</p>
    <a href="account.php"><button class="button button-block"/>ลองอีกครั้ง</button></a>
</div>
</body>
</html>
