<?php
include_once "control_user.php";
require "include/db_connect.php";
?>
<!DOCTYPE html>
<html>
<head>
	<!-- <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet"> -->
	<link href="./css/menu.css" rel="stylesheet" type="text/css">
	<title></title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar navbar-dark">
		<a class="navbar-brand" href="index.php">ระบบแนะนำสถานที่</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="home.php"><i class="fa fa-home"></i> <span>หน้าหลัก</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="guide.php"><i class="fa fa-search"></i> <span>ค้นหาสถานที่</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="history.php"><i class="fa fa-history"></i> <span>ประวัติการท่องเที่ยว</span></a>
				</li>
			</ul>
			<ul class="navbar-nav navbar-right ml-auto" style="margin-right: 2%;">
<?php
if (isSignin() !== TRUE) {
	?>
							<li class="nav-item">
								<a class="nav-link" href="singin.php"><i class="material-icons">&#xE890;</i> <span>เข้าสู่ระบบ</span></a>
							</li><?php
} else {
	$email       = $_SESSION['email'];
	$show_userer = "SELECT * FROM users as us
				                                INNER JOIN info_users as info on us.id_user = info.id_user
				                                WHERE us.email = '".$email."'";
	$result    = $conn->query($show_userer);
	$show_user = $result->fetch_assoc();

	?>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle user-action" data-toggle="dropdown" href="#"><?php
	if ($show_user['gender'] == "ชาย") {
		?> <img alt="Avatar" class="avatar" src="https://image.flaticon.com/icons/svg/145/145842.svg"> <?php
		echo $_SESSION['first_name'];
		?><b class="caret"></b> <?php } else if ($show_user['gender'] == "หญิง") {
		?> <img alt="Avatar" class="avatar" src="https://image.flaticon.com/icons/svg/146/146015.svg"> <?php
		echo $_SESSION['first_name'];
		?><b class="caret"></b> <?php } else {
		?> <img alt="Avatar" class="avatar" src="https://image.flaticon.com/icons/svg/149/149071.svg"> <?php
		echo $_SESSION['first_name'];
		?><b class="caret"></b> <?php }?></a>
								<ul class="dropdown-menu">
									<li>
										<a class="dropdown-item" href="account.php"><i class="fa fa-user"></i> บัญชี</a>
									</li>
									<li class="divider dropdown-divider"></li>
									<li>
										<a class="dropdown-item" href="logout.php"><i class="material-icons">&#xE8AC;</i> ออกจากระบบ</a>
									</li>
								</ul>
							</li><?php
}?>
			</ul>
		</div>
	</nav>
</body>
</html>