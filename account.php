<?php
include './include/include_head.php';
/* Main page with two forms: sign up and log in */
require './include/db_conn.php';
session_start();
?>
<!DOCTYPE html>
<html>
<?php include 'navbar.php';?>
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
<link rel="stylesheet" type="text/css" href="./css/loginstyle.css">
<body>
  <div class="form">

    <ul class="tab-group">
      <li class="tab"><a href="#signup">สมัครสมาชิก</a></li>
      <li class="tab active"><a href="#login">เข้าสู่ระบบ</a></li>
    </ul>

    <div class="tab-content">

      <div id="login">
        <h1>ยินดีต้อนรับกลับ!</h1>

        <form action="account.php" method="post" autocomplete="off">

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email"/>
          </div>

          <div class="field-wrap">
            <label>
              รหัสผ่าน<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>

          <p class="forgot"><a href="forgot.php">ลืมรหัสผ่าน?</a></p>

          <button class="button button-block" name="login" />เข้าสู่ระบบ</button>

        </form>

      </div>

      <div id="signup">
        <h1>สมัครสมาชิก ฟรี!</h1>

        <form action="account.php" method="post" autocomplete="off">

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
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>

          <div class="field-wrap">
            <label>
              รหัสผ่าน<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          </div>

          <button type="submit" class="button button-block" name="register" />สมัครสมาชิก</button>

        </form>

      </div>

    </div><!-- tab-content -->

  </div> <!-- /form -->

<!-- <div class="container">
		<div class="row justify-content-md-center">
			<div class="col-xl-8 col-md-8">


			<div class="card bg-light mb-3 ">
				<div class="card-header">เข้าสู่ระบบ</div>
				<div class="card-body">
					<form>
						<div class="form-group">
							<label for="exampleInputEmail1">Username</label>
							<input type="Username" class="form-control" id="exampleInputUsername" placeholder="Enter Username">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</div>
						<div class="text-right">
							<div class="form-check">
								<label>
									<a href="">
										<span>ลืมรหัสผ่าน ?</span>
									</a>
								</label>
							</div>
							<button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
						</div>
					</form>
				</div>
			</div>
			</div>
		</div>
	</div> -->


<!-- username : <input type="text" name="username">

 -->

<script src="./js/loginscript.js"></script>
</body>
</html>
