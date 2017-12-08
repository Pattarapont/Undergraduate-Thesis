<?php
// include "include/include_pre.php";
include 'include/include_head.php';
include 'menu.php';
/*
if (!isSignin()) {
header("location: singin.php");
}
 */

// acction จาก form_main.php
/*
$new_car        = $_POST['car'];
$new_traveltime = $_POST['traveltime'];
$new_camp       = $_POST['camp'];
$new_money      = $_POST['money'];
$new_travel     = $_POST['travel_form'];
$new_saving     = $_POST['saving'];
$province       = $_POST['check_province'];
 */
require 'include/matching.php';

?>
<!DOCTYPE html>
<html>
<head>
  <title>แนะนำสถานที่ท่องเที่บง</title>
</head>
<body>
<?php

echo $result;
echo "<br>";
echo "สถานที่ : ", $answer['name_location'], "<br>";
echo "เคสที่ : ", $answer['id'], "<br>";
echo "จังหวัด : ", $answer['name_province'], "<br>";
?>
  <section style="padding: 10px 0px">
    <div class="container">

    <h2>ผลการค้นหาสถานที่ท่องเที่ยวคือ</h2>

      <hr>
      <br>
    <div class="row">
      <center>
<div class="col-md-8 col-sm-12 col-xs-12">
        <div class="card mb-3">
          <img alt="Card image cap" class="card-img-top" src="images/watyai.jpg">
          <div class="card-body">
            <h4 class="card-title"><?php
echo $answer['name_location'];
?></h4>
            <p class="card-text">
<?php
echo "จังหวัด : ", $answer['name_province'];?></p>
           <p>
             <button type="button" class="btn btn-outline-primary">ค้นหาสถานที่ใหม่</button>
<button type="button" class="btn btn-outline-warning">เลือกสถานที่</button>
           </p>
          </div>
        </div>
      </div>
      </center>
    </div>
  </div>

  </section>
</body>
</html>