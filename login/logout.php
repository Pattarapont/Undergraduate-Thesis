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
  <title>logout</title>
<?php include 'css/css.html';?>
</head>

<body>
    <div class="form">
          <h1>Thanks for stopping by</h1>

          <p><?='You have been logged out!';?></p>

          <a href="singin.php"><button class="button button-block"/>เข้าสู่ระบบ</button></a>

    </div>
</body>
</html>
