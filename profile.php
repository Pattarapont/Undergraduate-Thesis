<?php
include "include/db_connect.php";

include 'include/include_head.php';
include 'menu.php';
/* Displays user information and some useful messages */
// session_start();

// Check if user is logged in using the session variable
if ($_SESSION['logged_in'] != 1) {
	$_SESSION['message'] = "You must log in before viewing your profile page!";
	header("location: error.php");
} else {
	// Makes it easier to read
	$first_name = $_SESSION['first_name'];
	$last_name  = $_SESSION['last_name'];
	$email      = $_SESSION['email'];
	$active     = $_SESSION['active'];
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST['profile'])) {
		//user logging in

		require 'include/save_profile.php';

	} elseif (isset($_POST['register'])) {
		//user registering

		require 'register.php';

	}
}
?>
<!DOCTYPE html>
<html>
<head>
<?php

?>
	<link href="./jquery.Thailand.js/dist/jquery.Thailand.min.css" rel="stylesheet">
	<title>Welcome <?=$first_name.' '.$last_name?>
	</title>
</head>
<body>
	<section>
		<!-- เริ่มกรอกข้อมูลส่วนตัว -->
		<form action="profile.php" class="was-validated" id="profile" method="post" name="profile">
			<div class="container">
				<h1>กรุณากรอกข้อมูลของท่าน</h1>
				<div class="card">
					<div class="card-header">
						ข้อมูลส่วนตัว
					</div>
					<div class="card-body">
						<div class="form-row">
							<div class="form-group col-md-3">
								<p>เพศ</p><label class="custom-control custom-radio"><input class="custom-control-input" id="gender" name="gender" required="" type="radio" value="ชาย"> <span class="custom-control-indicator"></span> <span class="custom-control-description">ชาย</span></label> <label class="custom-control custom-radio"><input class="custom-control-input" id="gender" name="gender" required="" type="radio" value="หญิง"> <span class="custom-control-indicator"></span> <span class="custom-control-description">หญิง</span></label>
							</div>
							<div class="form-group col-md-4">
								<label for="validationDefault04">อายุ</label> <input class="form-control" id="age" name="age" placeholder="กรุณากรอกอายุ" required="" type="number">
							</div>
							<div class="form-group col-md-5">
								<label for="validationDefault02">อาชีพ</label> <select class="custom-select d-block col" id="career" name="career" required="">
									<option disabled hidden="" selected value="">
										-- โปรดเลือกอาชีพ --
									</option>
									<option value="รับราชการ">
										รับราชการ
									</option>
									<option value="ธุรกิจส่วนตัว">
										ธุรกิจส่วนตัว
									</option>
									<option value="ค้าขาย">
										ค้าขาย
									</option>
									<option value="พนักงานบริษัท">
										พนักงานบริษัท
									</option>
									<option value="เกษตรกรรม">
										เกษตรกรรม
									</option>
									<option value="รับจ้างทั่วไป">
										รับจ้างทั่วไป
									</option>
									<option value="อื่นๆ">
										อื่นๆ
									</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="validationDefault01">Email</label> <input class="form-control" id="validationDefault01" name="email" placeholder="กรุณากรอก E-mail" required="" type="email">
							</div>
							<div class="form-group col-md-6">
								<label for="validationDefault02">เบอร์โทรศัพท์ (Username)</label>
								<input class="form-control" id="validationDefault02" name="telephone" maxlength=
            "10" placeholder="xxx-xxxxxxx" required="" type="text">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6" id="autodistrict">
								<label for="validationDefault04">ตำบล</label> <input class="form-control" id="validationDefault04" name="district" placeholder="กรุณากรอกตำบล" required="" type="text">
							</div>
							<div class="form-group col-md-6" id="autoamphoe">
								<label for="validationDefault04">อำเภอ</label> <input class="form-control" id="validationDefault04" name="amphoe" placeholder="กรุณากรอกอำเภอ" required="" type="text">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6" id="autoprovince">
								<label for="validationDefault04">จังหวัด</label> <input class="form-control" id="validationDefault04" name="county" placeholder="กรุณากรอกจังหวัด" required="" type="text">
							</div>
							<div class="form-group col-md-6" id="autozipcode">
								<label for="validationDefault05">รหัสไปรษณีย์</label> <input class="form-control" id="validationDefault05" name="zipcode" placeholder="กรุณากรอกรหัสไปรษณีย์" required="" type="text">
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="card">
					<div class="card-header">
						ข้อมูลด้านสุขภาพ
					</div>
					<div class="card-body">
						<div class="form-row">
							<div class="form-group col-md-4">
								<p>โรคประจำตัว</p>
								<label class="custom-control custom-radio">
									<input class="custom-control-input" id="congenital_dis" name="congenital_dis" required="" type="radio" value="0"> <span class="custom-control-indicator"></span>
									<span class="custom-control-description">ไม่มี</span>
								</label>
									<label class="custom-control custom-radio">
										<input class="custom-control-input" id="congenital_dis" name="congenital_dis" required="" type="radio" value="1">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">มี</span>
								</label>
							</div>
							<div class="form-group col-md-4">
								<label>โรคประจำตัว</label> <select class="custom-select d-block col" id="name_congenital_dis" name="name_congenital_dis" required="">
									<!-- <select class="form-group custom-select d-block col" required> -->
									<option disabled hidden="" selected value="">
										-- โปรดเลือกโรคประจำตัว --
									</option>
									<option value="โรคหัวใจ">
										โรคหัวใจ
									</option>
									<option value="เบาหวาน">
										เบาหวาน
									</option>
									<option value="ความดันโลหิต">
										ความดันโลหิต
									</option>
									<option value="ข้อเข่าเสื่อม">
										ข้อเข่าเสื่อม
									</option>
									<option value="จอประสาทตาเสื่อม">
										จอประสาทตาเสื่อม
									</option>
									<option value="">
										โรคอื่นๆ
									</option>
								</select>
							</div>
							<div class="form-group col-md-4">
								<label>การเคลื่อนไหวร่างกาย</label> <select class="custom-select d-block col" id="body_movement" name="body_movement" required="">
									<option disabled hidden="" selected value="">
										-- โปรดเลือกการเคลื่อนไหวร่างกาย --
									</option>
									<option value="เดินได้ปกติ">
										เดินได้ปกติ
									</option>
									<option value="เดินได้เล็กน้อย">
										เดินได้เล็กน้อย
									</option>
									<option value="เดินได้เล็กน้อย/ใช้ไม้เท้า">
										เดินได้เล็กน้อย/ใช้ไม้เท้า
									</option>
									<option value="เดินได้เล็กน้อย/ใช้รถเข็น">
										เดินได้เล็กน้อย/ใช้รถเข็น
									</option>
									<option value="เดินไม่ได้/ใช้รถเข็น">
										เดินไม่ได้/ใช้รถเข็น
									</option>
								</select>
							</div>
						</div><!-- <div class="text-right">
                            <button class="btn btn-outline-success" type="submit">Submit form</button>
                        </div> -->
						<!-- </form> -->
					</div>
				</div>
				<hr>
			</div>
			<div class="container">
				<div class="text-right">
					<button class="btn btn-outline-success" type="submit" name="account">บันทึกข้อมูล</button>
				</div>
			</div>
		</form>
		<footer>
			<div class="container">
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
			</div>
		</footer>
	</section>
	<script src="./jquery.Thailand.js/dependencies/zip.js/zip.js" type="text/javascript">
	</script> <!-- / dependencies for zip mode -->

	<script src="./jquery.Thailand.js/dependencies/JQL.min.js" type="text/javascript">
	</script>
	<script src="./jquery.Thailand.js/dependencies/typeahead.bundle.js" type="text/javascript">
	</script>
	<script src="./jquery.Thailand.js/dist/jquery.Thailand.min.js" type="text/javascript">
	</script>
	<script type="text/javascript">
	   /******************\
	           *     DEMO 1     *
	          \******************/
	          // demo 1: load database from json. if your server is support gzip. we recommended to use this rather than zip.
	          // for more info check README.md
	          $.Thailand(
	          {
	              database: './jquery.Thailand.js/database/db.json',
	              $district: $('#autodistrict [name="district"]'),
	              $amphoe: $('#autoamphoe [name="amphoe"]'),
	              $province: $('#autoprovince [name="county"]'),
	              $zipcode: $('#autozipcode [name="zipcode"]'),
	              onDataFill: function(data)
	              {
	                  console.info('Data Filled', data);
	              },
	              onLoad: function()
	              {
	                  console.info('Autocomplete is ready!');
	                  $('#loader, .demo').toggle();
	              }
	          });
	      // watch on change
	      /*
	      $('#autoprovince [name="district"]').change(function()
	      {
	          console.log('ตำบล', this.value);
	      });
	      $('#autoprovince [name="amphoe"]').change(function()
	      {
	          console.log('อำเภอ', this.value);
	      });
	      $('#autoprovince [name="province"]').change(function()
	      {
	          console.log('จังหวัด', this.value);
	      });
	      $('#autoprovince [name="zipcode"]').change(function()
	      {
	          console.log('รหัสไปรษณีย์', this.value);
	      });
	      */
	</script>
</body>
</html>