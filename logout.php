<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Error</title>
<?php include './include/include_head.php';?>
<link rel="stylesheet" type="text/css" href="./css/loginstyle.css">
</head>

<body>
    <div class="form">
          <h1>ลาก่อน</h1>

          <p><?='คุณได้ออกจากระบบเรียบร้อยแล้ว';?></p>

          <a href="index.php"><button class="button button-block"/>หน้าหลัก</button></a>

    </div>
</body>
</html>
