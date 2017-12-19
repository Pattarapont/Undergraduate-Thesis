<?php
include './include/include_head.php';
include 'menu.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ระบบแนะนำสถานที่ท่องเที่ยวสำหรับผู้สูงอายุ</title>

<link rel="stylesheet" type="text/css" href="./css/header.css">
</head>

<body>

<section>
<header>
	<br>
	<br>
	<br>
	<h1>ระบบแนะนำสถานที่ท่องเที่ยวสำหรับผู้สูงอายุ</h1>
<br>
<br>
    <div class="container " id="welcome">
        <div class="intro-text">
            <!-- <div class="intro-lead-in text-head">
            <span class="border border-warning border-bottom-0">ระบบแนะนำสถานที่ท่องเที่ยวสำหรับผู้สูงอายุ</span>
        </div> -->
            <a href="control_page.php" method ="POST">
            	<button type="button" class="btn btn-warning" name="control_page">ค้นหาสถานที่กันเลย</button>
            </a>
        </div>
    </div>
</header>
</section>
</body>
</html>
