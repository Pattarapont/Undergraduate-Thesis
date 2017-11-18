<!DOCTYPE html>
<html>
<head>
<?php
include './include/include_head.php';
include 'navbar.php';
?>
	<link href="./jquery.Thailand.js/dist/jquery.Thailand.min.css" rel="stylesheet">

	<title></title>
</head>
<body>
	<section>
		<!-- เริ่มกรอกข้อมูลส่วนตัว -->
		<div class="container">
			<h1>กรุณากรอกข้อมูลของท่าน</h1>
			<div class="card">
				<div class="card-header">
					ข้อมูลส่วนตัว
				</div>
				<div class="card-body">
					<form action="./include/getvariable.php" class="was-validated" id="inputpersonal" method="POST" name="account">
						<div class="form-group">
							<div class="row">
								<div class="col-md-4 mb-4">
									<p>เพศ</p><label class="custom-control custom-radio"><input class="custom-control-input" id="gender" name="gender" required="" type="radio" value="1"> <span class="custom-control-indicator"></span> <span class="custom-control-description">ชาย</span></label> <label class="custom-control custom-radio"><input class="custom-control-input" id="gender" name="gender" required="" type="radio" value="0"> <span class="custom-control-indicator"></span> <span class="custom-control-description">หญิง</span></label>
								</div>
								<div class="col-md-4 mb-4">
									<label for="validationDefault02">อายุ</label> <select class="custom-select d-block col" id="age" name="age" required="">
										<option disabled hidden="" selected value="">
											-- อายุ --
										</option>
										<option value="1">
											50 - 60 ปี
										</option>
										<option value="2">
											60 - 70 ปี
										</option>
										<option value="3">
											มากกว่า 70 ปี
										</option>
									</select>
								</div>
								<div class="col-md-4 mb-4">
									<label for="validationDefault02">อาชีพ</label> <select class="custom-select d-block col" id="career" name="career" required="">
										<option disabled hidden="" selected value="">
											-- โปรดเลือกอาชีพ --
										</option>
										<option value="1">
											รับราชการ
										</option>
										<option value="2">
											ธุรกิจส่วนตัว
										</option>
										<option value="3">
											ค้าขาย
										</option>
										<option value="4">
											พนักงานบริษัท
										</option>
										<option value="5">
											เกษตรกรรม
										</option>
										<option value="6">
											รับจ้างทั่วไป
										</option>
										<option value="7">
											อื่นๆ
										</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 mb-6">
									<label for="validationDefault01">ชื่อ</label> <input class="form-control" id="validationDefault01" name="firstname" placeholder="กรุณากรอกชื่อ" required="" type="text">
								</div>
								<div class="col-md-6 mb-6">
									<label for="validationDefault01">นามสกุล</label> <input class="form-control" id="validationDefault01" name="lastname" placeholder="กรุณากรอกนามสกุล" required="" type="text">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 mb-6">
									<label for="validationDefault01">E-mail</label> <input class="form-control" id="validationDefault01" placeholder="กรุณากรอก E-mail" required="" type="e-mail">
								</div>
								<div class="col-md-6 mb-6">
									<label for="validationDefault02">เบอร์โทรศัพท์ (Username)</label> <input class="form-control" id="validationDefault02" name="tel" placeholder="xxx-xxxxxxx" required="" type="text">
								</div>
							</div>
						</div>
						<div class="form-group" id="autoprovince">
							<div class="row">
								<div class="col-md-6 mb-6">
									<label for="validationDefault04">ตำบล</label> <input class="form-control" id="validationDefault04" name="district" placeholder="กรุณากรอกตำบล" required="" type="text">
								</div>
								<div class="col-md-6 mb-6">
									<label for="validationDefault04">อำเภอ</label> <input class="form-control" id="validationDefault04" name="amphoe" placeholder="กรุณากรอกอำเภอ" required="" type="text">
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 mb-6">
									<label for="validationDefault04">จังหวัด</label> <input class="form-control" id="validationDefault04" name="province" placeholder="กรุณากรอกจังหวัด" required="" type="text">
								</div>
								<div class="col-md-6 mb-6">
									<label for="validationDefault05">รหัสไปรษณีย์</label> <input class="form-control" id="validationDefault05" name="zipcode" placeholder="กรุณากรอกรหัสไปรษณีย์" required="" type="text">
								</div>
							</div>
						</div><button class="btn btn-primary" type="submit">Submit form</button>
					</form>
				</div>
			</div>
		</div><!-- สิ้นสุดการกรอกข้อมูลส่วนตัว -->
		<hr>
		<!-- เริ่มกรอกข้อมูลสุขภาพ -->
		<div class="container">
			<div class="card">
				<div class="card-header">
					ข้อมูลด้านสุขภาพ
				</div>
				<div class="card-body">
					<form action="./include/getvariable.php" class="was-validated" id="inputpersonal" method="post" name="inputpersonal">
						<div class="form-group">
							<div class="row">
								<div class="col-md-4 mb-4">
									<p>โรคประจำตัว</p><label class="custom-control custom-radio"><input class="custom-control-input" id="congenital_dis" name="congenital_dis" required="" type="radio" value="0"> <span class="custom-control-indicator"></span> <span class="custom-control-description">ไม่มี</span></label> <label class="custom-control custom-radio"><input class="custom-control-input" id="congenital_dis" name="congenital_dis" required="" type="radio" value="1"> <span class="custom-control-indicator"></span> <span class="custom-control-description">มี</span></label>
								</div>
								<div class="col-md-4 mb-4">
									<label>โรคประจำตัว</label> <select class="custom-select d-block col" id="name_congenital_dis" name="name_congenital_dis" required="">
										<!-- <select class="form-group custom-select d-block col" required> -->
										<option disabled hidden="" selected value="">
											-- โปรดเลือกโรคประจำตัว --
										</option>
										<option value="1">
											โรคหัวใจ
										</option>
										<option value="2">
											เบาหวาน
										</option>
										<option value="3">
											ความดันโลหิต
										</option>
										<option value="4">
											ข้อเข่าเสื่อม
										</option>
										<option value="5">
											จอประสาทตาเสื่อม
										</option>
										<option value="6">
											โรคอื่นๆ
										</option>
									</select>
								</div>
								<div class="col-md-4 mb-4">
									<label>การเคลื่อนไหวร่างกาย</label> <select class="custom-select d-block col" id="body_movement" name="body_movement" required="">
										<option disabled hidden="" selected value="">
											-- โปรดเลือกการเคลื่อนไหวร่างกาย --
										</option>
										<option value="1">
											เดินได้ปกติ
										</option>
										<option value="2">
											เดินได้เล็กน้อย
										</option>
										<option value="3">
											เดินได้เล็กน้อย/ใช้ไม้เท้า
										</option>
										<option value="4">
											เดินได้เล็กน้อย/ใช้รถเข็น
										</option>
										<option value="5">
											เดินไม่ได้/ใช้รถเข็น
										</option>
									</select>
								</div>
							</div>
						</div><button class="btn btn-success" type="submit">Submit form</button>
					</form>
				</div>
			</div>
		</div>
		<hr>
	</section>
    <!-- <script src="./js/jquery-3.2.1.min.js"></script> -->

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

	                   $.Thailand({
	                       database: './jquery.Thailand.js/database/db.json',

	                       $district: $('#autoprovince [name="district"]'),
	                       $amphoe: $('#autoprovince [name="amphoe"]'),
	                       $province: $('#autoprovince [name="province"]'),
	                       $zipcode: $('#autoprovince [name="zipcode"]'),

	                       onDataFill: function(data){
	                           console.info('Data Filled', data);
	                       },

	                       onLoad: function(){
	                           console.info('Autocomplete is ready!');
	                           $('#loader, .demo').toggle();
	                       }
	                   });

	                   // watch on change

	                   $('#autoprovince [name="district"]').change(function(){
	                       console.log('ตำบล', this.value);
	                   });
	                   $('#autoprovince [name="amphoe"]').change(function(){
	                       console.log('อำเภอ', this.value);
	                   });
	                   $('#autoprovince [name="province"]').change(function(){
	                       console.log('จังหวัด', this.value);
	                   });
	                   $('#autoprovince [name="zipcode"]').change(function(){
	                       console.log('รหัสไปรษณีย์', this.value);
	                   });

	</script>
</body>
</html>