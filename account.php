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

$_SESSION['first_name'] = $callAccount['first_name'];
$_SESSION['id_user']    = $callAccount['id_user'];

// echo $callAccount['id_user'];
// echo $callAccount['first_name'];
// echo $age    = $callAccount['age'];
// echo $gender = $callAccount['gender'];

?>
<!DOCTYPE html>
<html>
	<head>

		<script type="text/javascript">
		             var Gender = "<?php echo $callAccount['gender'];?>";
		          // document.write(Gender);
		           var Career = "<?php echo $callAccount['career'];?>";
		        // document.write(Career);
		           var CongenitalDis = "<?php echo $callAccount['congenital_dis'];?>";
		           // document.write(CongenitalDis);
		           var NameCongenitalDis = "<?php echo $callAccount['name_congenital_dis'];?>";
		           // document.write(NameCongenitalDis);
		           var BodyMovement = "<?php echo $callAccount['body_movement'];?>";
		           // document.write(BodyMovement);


		</script>
		<link href="./jquery.Thailand.js/dist/jquery.Thailand.min.css" rel="stylesheet">
		<title>
			Account
		</title>
	</head>
	<body>
		<section>
			<!-- เริ่มกรอกข้อมูลส่วนตัว -->

			<form action="edit_account.php" class="was-validated" id="inputpersonal" method="post" name="form_user">
				<div class="container" style="padding-top: 20px; padding-right: 8%; padding-bottom: 10px; padding-left: 8%;">
					<h1>
						ประวัติส่วนตัว
					</h1>

					<div class="card">
						<div class="card-header">
							ข้อมูลพื้นฐาน
						</div>

						<div class="card-body">
							<div class="form-row">
								<div class="form-group col-md-3">
									<p>
										เพศ
									</p>
									<label class="custom-control custom-radio"><input class="custom-control-input" id="gender" name="gender" required="" type="radio" value="ชาย"> <span class="custom-control-indicator"></span> <span class="custom-control-description">ชาย</span></label> <label class="custom-control custom-radio"><input class="custom-control-input" id="gender" name="gender" required="" type="radio" value="หญิง"> <span class="custom-control-indicator"></span> <span class="custom-control-description">หญิง</span></label>
								</div>

								<div class="form-group col-md-4">
									<label for="validationDefault04">อายุ</label> <input class="form-control" id="age" name="age" placeholder="กรุณากรอกอายุ" required="" type="number" value="<?php echo $callAccount['age'];?>">
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
										<option value="เกษตรกร">
											เกษตรกร
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
									<label for="first_name">ชื่อ</label> <input class="form-control" id="first_name" name="first_name" placeholder="กรุณากรอกชื่อ" required="" type="text" value="<?php echo $callAccount['first_name'];?>">
								</div>

								<div class="form-group col-md-6">
									<label for="last_name">นามสกุล</label> <input class="form-control" id="last_name" name="last_name" placeholder="กรุณากรอกนามสกุล" type="text" value="<?php echo $callAccount['last_name'];?>">
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="email">Email</label> <input class="form-control" id="email" name="email" placeholder="กรุณากรอก E-mail" required="" type="email" value="<?php echo $callAccount['email'];?>">
								</div>

								<div class="form-group col-md-6">
									<label for="telephone">เบอร์โทรศัพท์</label> <input class="form-control" id="telephone" maxlength="10" name="telephone" placeholder="เบอร์โทรศัพท์ 10 หลัก" type="text" value="<?php echo $callAccount['telephone'];?>">
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6" id="autodistrict">
									<label for="validationDefault04">ตำบล</label> <input class="form-control" id="validationDefault04" name="district" placeholder="กรุณากรอกตำบล" type="text" value="<?php echo $callAccount['district'];?>">
								</div>

								<div class="form-group col-md-6" id="autoamphoe">
									<label for="validationDefault04">อำเภอ</label> <input class="form-control" id="validationDefault04" name="amphoe" placeholder="กรุณากรอกอำเภอ" type="text" value="<?php echo $callAccount['amphoe'];?>">
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6" id="autoprovince">
									<label for="validationDefault04">จังหวัด</label> <input class="form-control" id="validationDefault04" name="county" placeholder="กรุณากรอกจังหวัด" required="" type="text" value="<?php echo $callAccount['county'];?>">
								</div>

								<div class="form-group col-md-6" id="autozipcode">
									<label for="validationDefault05">รหัสไปรษณีย์</label> <input class="form-control" id="validationDefault05" name="zipcode" placeholder="กรุณากรอกรหัสไปรษณีย์" type="text" value="<?php echo $callAccount['zipcode'];?>">
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
									<p>
										โรคประจำตัว
									</p>
									<label class="custom-control custom-radio"><input class="custom-control-input" id="congenital_dis" name="congenital_dis" required="" type="radio" value="0"> <span class="custom-control-indicator"></span> <span class="custom-control-description">ไม่มี</span></label> <label class="custom-control custom-radio"><input class="custom-control-input" id="congenital_dis" name="congenital_dis" required="" type="radio" value="1"> <span class="custom-control-indicator"></span> <span class="custom-control-description">มี</span></label>
								</div>

								<div class="form-group col-md-4">
									<label>โรคประจำตัว</label> <select class="custom-select d-block col" id="name_congenital_dis" name="name_congenital_dis">
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
										<option value="อื่นๆ">
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
							</div>
						</div>
					</div>

					<hr>
				</div>

				<div class="container" style="padding-top: 0px; padding-right: 8%; padding-bottom: 20px; padding-left: 8%;">
					<div class="text-right">
						<button class="btn btn-outline-success" name="edit_account" type="submit" style="cursor: pointer;">บันทึกข้อมูล</button>
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
		        // Gender
		        if(Gender == "ชาย"){
		           $("input#gender").val(["ชาย"]);
		        }
		        else if(Gender == "หญิง"){
		           $("input#gender").val(["หญิง"]);
		        }

		        // Career
		        if(Career == "รับราชการ"){
		        $( "#career").val([ "รับราชการ"]);
		        }
		        else if(Career== "ธุรกิจส่วนตัว"){
		        $( "#career").val([ "ธุรกิจส่วนตัว"]);
		        }
		        else if(Career =="ค้าขาย"){
		        $( "#career").val([ "ค้าขาย"]);
		        }
		        else if(Career == "พนักงานบริษัท"){
		        $( "#career").val([ "พนักงานบริษัท"]);
		        }
		        else if(Career =="เกษตรกร"){
		        $( "#career").val([ "เกษตรกร"]);
		        }
		        else if(Career== "รับจ้างทั่วไป"){
		        $( "#career").val([ "รับจ้างทั่วไป"]);
		        }
		        else if(Career== "อื่นๆ"){
		        $( "#career").val([ "อื่นๆ"]);
		        }

		        // CongenitalDis
		        if(CongenitalDis == "1"){
		        $( "input#congenital_dis").val([ "1"]);
		        }
		        else if(CongenitalDis == "0"){
		        $( "input#congenital_dis").val([ "0"]);
		        }

		        // NameCongenitalDis
		        if(NameCongenitalDis == "โรคหัวใจ"){
		        $( "#name_congenital_dis").val([ "โรคหัวใจ"]);
		        }
		        else if(NameCongenitalDis == "เบาหวาน"){
		        $( "#name_congenital_dis").val([ "เบาหวาน"]);
		        }
		        else if(NameCongenitalDis == "ความดันโลหิต"){
		        $( "#name_congenital_dis").val([ "ความดันโลหิต"]);
		        }
		        else if(NameCongenitalDis == "ข้อเข่าเสื่อม"){
		        $( "#name_congenital_dis").val([ "ข้อเข่าเสื่อม"]);
		        }
		        else if(NameCongenitalDis == "จอประสาทตาเสื่อม"){
		        $( "#name_congenital_dis").val([ "จอประสาทตาเสื่อม"]);
		        }
		        else if(NameCongenitalDis == "อื่นๆ"){
		        $( "#name_congenital_dis").val([ "อื่นๆ"]);
		        }

		        // body_movement
		        if(BodyMovement == "เดินได้ปกติ"){
		        $( "#body_movement").val([ "เดินได้ปกติ"]);
		        }
		        else if(BodyMovement == "เดินได้เล็กน้อย"){
		        $( "#body_movement").val([ "เดินได้เล็กน้อย"]);
		        }
		        else if(BodyMovement == "เดินได้เล็กน้อย/ใช้ไม้เท้า"){
		        $( "#body_movement").val([ "เดินได้เล็กน้อย/ใช้ไม้เท้า"]);
		        }
		        else if(BodyMovement == "เดินได้เล็กน้อย/ใช้รถเข็น"){
		        $( "#body_movement").val([ "เดินได้เล็กน้อย/ใช้รถเข็น"]);
		        }
		        else if(BodyMovement == "เดินไม่ได้/ใช้รถเข็น"){
		        $( "#body_movement").val([ "เดินไม่ได้/ใช้รถเข็น"]);
		        }

		</script> <?php $conn->close();?>
	</body>
</html>