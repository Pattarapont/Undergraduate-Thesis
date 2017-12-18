<?php
/* Main page with two forms: sign up and log in */
require './include/db_connect.php';
// session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
<?php
include './include/include_head.php';
include 'menu.php';

include './css/css.html';
?>
</head>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST['login'])) {
		//user logging in

		require 'login.php';

	} elseif (isset($_POST['register'])) {
		//user registering

		require 'register.php';

	}
}
?>
<body>
  <div class="form">

      <ul class="tab-group">
        <li class="tab"><a href="#signup">สมัครสมาชิก</a></li>
        <li class="tab active"><a href="#login">เข้าสู่ระบบ</a></li>
      </ul>

      <div class="tab-content">

         <div id="login">
          <h1>ยินดีต้อนรับ</h1>

          <form action="singin.php" method="post" autocomplete="off">

            <div class="field-wrap">
            <label>
              Email <span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email"/>
          </div>

          <div class="field-wrap">
            <label>
              Password (รหัสผ่าน)<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>

          <!-- <p class="forgot"><a href="forgot.php">ลืมรหัสผ่าน ?</a></p> -->

          <button class="button button-block" name="login" />เข้าสู่ระบบ</button>

          </form>

        </div>

        <div id="signup">
          <h1>สมัครสมาชิกฟรี</h1>

          <form action="singin.php" method="post" autocomplete="off">

          <div class="top-row">
            <div class="field-wrap">
              <label>
                ชื่อ<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>

            <div class="field-wrap">
              <label>
                นามสกุล<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name='email' />
          </div>

          <div class="field-wrap">
            <label>
              รหัสผ่าน<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name='password'/>
          </div>

          <button type="submit" class="button button-block" name="register" />สมัครสมาชิก</button>

          </form>

        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->
    <script src="./js/jquery-3.2.1.min.js"></script>
    <script src="./js/login.js"></script>

</body>
</html>
