<?php
include 'include/include_head.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Beautiful Navbar with Menu Icons</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/menu.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar navbar-dark">
		<a class="navbar-brand" href="index.php">ระบบแนะนำสถานที่</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav navbar-right">
				 <li class="nav-item"><a href="home.php" class="nav-link"><i class="fa fa-home"></i><span>
				 หน้าหลัก</span></a></li>
				<li class="nav-item"><a href="guide.php" class="nav-link"><i class="fa fa-search"></i><span> ค้นหาสถานที่</span></a></li>
				<li class="nav-item">
					<a class="nav-link" href="history.php"><i class="fa fa-history"></i> <span>ประวัติการท่องเที่ยว</span></a>
				</li>
			</ul><!-- Login -->
			<ul class="navbar-nav navbar-right ml-auto" style="margin-right: 50px;">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle user-action" data-toggle="dropdown" href="#"><img alt="Avatar" class="avatar" src="https://image.flaticon.com/icons/svg/149/149071.svg"> User <b class="caret"></b> <!-- <img src="https://image.flaticon.com/icons/svg/145/145842.svg" class="avatar" alt="Avatar"> Man  <b class="caret"></b>
                    <img src="https://image.flaticon.com/icons/svg/146/146015.svg" class="avatar" alt="Avatar"> Female  <b class="caret"></b> --></a>
					<ul class="dropdown-menu">
						<li>
							<a class="dropdown-item" href="account.php"><i class="fa fa-user"></i> บัญชี</a>
						</li>
						<li class="divider dropdown-divider"></li>
						<li>
							<a class="dropdown-item" href="#"><i class="material-icons">&#xE8AC;</i> ออกจากระบบ</a>
						</li>
					</ul>
				</li>
			</ul>

		</div>
	</nav>
	<h1>a</h1>
</body>
</html>