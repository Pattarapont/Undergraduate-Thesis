<?php
include "include/include_pre.php";
/*
session_start();
if (!isSignin()) {
header("location: singin.php");
}
 */
include 'include/include_head.php';
include 'navbar.php';

$new_car        = $_POST['car'];
$new_traveltime = $_POST['traveltime'];
$new_camp       = $_POST['camp'];
$new_money      = $_POST['money'];
$new_travel     = $_POST['travel_form'];
$new_saving     = $_POST['saving'];
$province       = $_POST['check_province'];

require 'include/matching.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
echo "สถานที่ : ", $answer['location'], "<br>";
echo "เคสที่ : ", $answer['id'], "<br>";
echo "จังหวัด : ", $answer['id_province'], "<br>";
?>
  <div class="container">
    <div class="row">
      <div class="col-md">
        <div class="card mb-3" style="max-width: 90%;">
          <img alt="Card image cap" class="card-img-top" src="images/mysql.png">
          <div class="card-body">
            <h4 class="card-title"><?php
echo $answer['location'];
?></h4>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>