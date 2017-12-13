<?php
include_once "control_user.php";
require "include/db_connect.php";

// $idUser = $_SESSION['email'];
// $ta = $_SESSION['id_user'];
// echo $ta;
?>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
	<a class="navbar-brand" href="index.php">ระบบแนะนำสถานที่ท่องเที่ยว</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="home.php">หน้าหลัก <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="history.php">ประวัติการท่องเที่ยว</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="guide.php">ค้นหาสถานที่ท่องเที่ยว</a>
			</li>
		</ul><!-- Login -->
		<ul class="nav navbar-nav navbar-right">
<?php
if (isSignin() !== TRUE) {
	?>
					<li class="nav-item navbar-right">
						<a class="nav-link" href="singin.php">เข้าสู่ระบบ</a>
						</li><?php
} else {
	?>
	<li class="nav-item">
							<div class="nav-link">
								ยินดีต้อนรับ คุณ
	<?php
	/*
	// $idUser = $_SESSION['id_user'];
	$email = $_SESSION['email'];
	$user   = "SELECT * FROM users as us
	INNER JOIN info_users as info on us.id_user = info.id_user
	WHERE us.email = $email";

	$db  = $conn->query($user);
	$abc = $db->fetch_assoc();

	echo $abc['first_name'];
	 */
	echo $_SESSION['first_name'];
	echo " AND ";
	echo $_SESSION['email'];
	?>
	</div>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="account.php?first_name=<?php echo $_SESSION['first_name'];?>">บัญชีผู้ใช้</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="logout.php">ออกจากระบบ</a>
	</li>
	<?php
}

// $conn->close();
?>
<!-- <li class="nav-item navbar-right">
<a class="nav-link" href="sign_in.php">สมัครสมาชิก</a>
</li> -->
</ul>
</div>
</nav>
