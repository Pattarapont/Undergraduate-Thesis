<?php
include './include/db_connect.php';
include './include/include_head.php';
include 'control_user.php';
include 'menu.php';
// session_start();

if (!isSignin()) {
	header("location: singin.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST['edit_account'])) {

		require 'edit_account.php';

	}
}
$email = $_SESSION['email'];

$sql_account = "SELECT * FROM users as us
			INNER JOIN info_users as info on us.id_user = info.id_user
			WHERE us.email = '".$email."'";

$result      = $conn->query($sql_account);
$callAccount = $result->fetch_assoc();

$_SESSION['id_user'] = $callAccount['id_user'];
echo $callAccount['id_user'];
echo $callAccount['first_name'];
/*
$idUser = $callAccount['id_user'];
echo $idUser;

echo $callAccount['id_user'];
echo "<br>";

echo $callAccount['id_user'];
echo "eeeeeeeeeeeee".$callAccount['gender'], $callAccount["age"];
 */
?>
<script type="text/javascript">

// var agender = <?php echo $callAccount['gender'];
//                                                                                                                                                                ?>;
// var career = <?php echo $callAccount['career'];
//                                                                                                                                                                ?>;
// var congenital_dis = <?php echo $callAccount['congenital_dis'];
//                                                                                                                                                                ?>;
// var name_congenital_dis = <?php echo $callAccount['name_congenital_dis'];
//                                                                                                                                                                ?>;
// var body_movement = <?php echo $callAccount['body_movement'];
//                                                                                                                                                                ?>;

</script>
<!DOCTYPE html>
<html>
<head>

	<link href="./jquery.Thailand.js/dist/jquery.Thailand.min.css" rel="stylesheet">
	<title>Account</title>
</head>
<body>
<?
/*
echo "eeeeeeeeeeeee".$callAccount["gender"], $callAccount["age"];

echo "<br>";
echo $sw['email'];
echo "<br>";
echo $callAccount['first_name'];
echo "<br>";
echo $callAccount['age'];
echo $callAccount['gender'];
*/
?>
	<section>
		<!-- เริ่มกรอกข้อมูลส่วนตัว -->
		<form action="edit_account.php" class="was-validated" id="inputpersonal" method="post" name="form_user">
			<div class="container">
				<div style="font-size:3em; color:Tomato">
  <i class="fas fa-camera-retro"></i>
</div>
				<h1>กรุณากรอกข้อมูลของท่าน </h1>
				<div class="card">
					<div class="card-header">
ข้อมูลส่วนตัว

					</div>
					<div class="card-body">
						<div class="form-row">
							<div class="form-group col-md-3">
								<p>เพศ</p>
								<label class="custom-control custom-radio">
									<input class="custom-control-input" id="gender" name="gender" required="" type="radio" value="ชาย">
									<span class="custom-control-indicator"></span> <span class="custom-control-description">ชาย</span>
								</label>
								<label class="custom-control custom-radio">
									<input class="custom-control-input" id="gender" name="gender" required="" type="radio" value="หญิง"> <span class="custom-control-indicator"></span>
									<span class="custom-control-description">หญิง</span>
								</label>
							</div>
							<div class="form-group col-md-4">
								<label for="validationDefault04">อายุ</label>
								<input class="form-control" id="age" name="age" placeholder="กรุณากรอกอายุ"
								required="" type="number"
								value="<?php echo $callAccount['age'];?>" >
							</div>
							<div class="form-group col-md-5">
								<label for="validationDefault02">อาชีพ</label>
								<select class="custom-select d-block col" id="career" name="career" required="">
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
								<label for="first_name">ชื่อ</label>
								<input class="form-control" id="first_name" name="first_name" placeholder="กรุณากรอกชื่อ" required="" type="text"
								value="<?php echo $callAccount['first_name'];?>">
							</div>
							<div class="form-group col-md-6">
								<label for="last_name">นามสกุล</label>
								<input class="form-control" id="last_name" name="last_name" placeholder="กรุณากรอกนามสกุล" required="" type="text" value="<?php echo $callAccount['last_name'];?>">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="email">Email</label>
								<input class="form-control" id="email" name="email" placeholder="กรุณากรอก E-mail" required="" type="email" value="<?php echo $callAccount['email'];?>">
							</div>
							<div class="form-group col-md-6">
								<label for="telephone">เบอร์โทรศัพท์ (Username)</label>
								<input class="form-control" id="telephone" name="telephone" maxlength="10"
            					placeholder="xxx-xxxxxxx" required="" type="text" value="<?php echo $callAccount['telephone'];?>">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6" id="autodistrict">
								<label for="validationDefault04">ตำบล</label> <input class="form-control" id="validationDefault04" name="district" placeholder="กรุณากรอกตำบล" required="" type="text"
								value="<?php echo $callAccount['district'];?>">
							</div>
							<div class="form-group col-md-6" id="autoamphoe">
								<label for="validationDefault04">อำเภอ</label> <input class="form-control" id="validationDefault04" name="amphoe" placeholder="กรุณากรอกอำเภอ" required="" type="text"
								value="<?php echo $callAccount['amphoe'];?>">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6" id="autoprovince">
								<label for="validationDefault04">จังหวัด</label> <input class="form-control" id="validationDefault04" name="county" placeholder="กรุณากรอกจังหวัด" required="" type="text"
								value="<?php echo $callAccount['county'];?>">
							</div>
							<div class="form-group col-md-6" id="autozipcode">
								<label for="validationDefault05">รหัสไปรษณีย์</label> <input class="form-control" id="validationDefault05" name="zipcode" placeholder="กรุณากรอกรหัสไปรษณีย์" required="" type="text"
								value="<?php echo $callAccount['zipcode'];?>">
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
									<input class="custom-control-input" id="congenital_dis" name="congenital_dis"
									required="" type="radio" value="0"> <span class="custom-control-indicator"></span>
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
								<label>การเคลื่อนไหวร่างกาย</label>
								<select class="custom-select d-block col" id="body_movement" name="body_movement"
								required="">
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
						</div>
					</div>
				</div>
				<hr>
			</div>
			<div class="container">
				<div class="text-right">
					<button class="btn btn-outline-success" type="submit" name="edit_account">บันทึกข้อมูล</button>
				</div>
			</div>
		</form>
		<footer>
<br>
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
	</script>

<script>
	// .val()
$( "input#gender").val(["ชาย"]);
$( "#career").val([ "พนักงานบริษัท"]);
$( "input#congenital_dis").val([ "1"]);
$( "#name_congenital_dis").val([ "โรคหัวใจ"]);
$( "#body_movement").val([ "เดินได้เล็กน้อย" ]);

</script>
<?php
$conn->close();
?>
</body>
</html>