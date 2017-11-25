<?php
include 'include/include_head.php';

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
include 'navbar.php';
require 'include/matching.php';
// echo $a['location'];
?>
<div class="container">
    <div class="row">
      <div class="col-md">
        <div class="card mb-3" style="max-width: 90%;">
          <img alt="Card image cap" class="card-img-top" src="images/mysql.png">
          <div class="card-body">
            <h4 class="card-title">
<?php
echo $a['location'];
?>

               </h4>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>