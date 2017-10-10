<?php
// include './include/include_head.php';

/* Displays all error messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Error</title>

<link rel="stylesheet" type="text/css" href="./css/loginstyle.css">
</head>

<body>
<div class="form">
    <h1>ผิดพลาด</h1>
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
