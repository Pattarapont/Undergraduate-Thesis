<?php
// สงวนสิทธิ์เฉพาะสมาชิก

include './include/include_head.php';
include 'menu.php';

if (!isSignin()) {
	header("location: singin.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<h1>กรุณากรอกข้อมูลการท่องเที่ยว</h1>
		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-header">
						ข้อมูลการท่องเทื่ยว
					</div>
					<div class="card-body">
						<form action="predict.php" class="was-validated" id="#" method="POST" name="#">
							<div class="form-row">
								<div class="form-group col-md-12">
									<p>จังหวัดที่ต้องการท่องเที่ยว</p>
									<label class="custom-control custom-radio">
										<input class="custom-control-input" id="check_province" name="check_province" required="" type="radio" value="1">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">พิษณุโลก</span>
									</label> <label class="custom-control custom-radio">
										<input class="custom-control-input" id="check_province" name="check_province" required="" type="radio" value="2">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">เพชรบูรณ์</span>
									</label> <label class="custom-control custom-radio">
										<input class="custom-control-input" id="check_province" name="check_province" required="" type="radio" value="3">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">เชียงใหม่</span>
									</label> <label class="custom-control custom-radio">
										<input class="custom-control-input" id="check_province" name="check_province" required="" type="radio" value="4">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">เชียงราย</span>
									</label>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<p>การเก็บเงินสำหรับท่องเที่ยว</p><select class="custom-select d-block col" id="saving" name="saving" required="">
										<option disabled hidden="" selected value="">
											-- โปรดเลือก --
										</option>
										<option value="0">ไม่มี</option>
										<option value="1">มี</option>
									</select>
								</div>
								<div class="form-group col-md-6">
									<p>งบประมาณ</p><select class="custom-select d-block col" id="money" name="money" required="">
										<option disabled hidden="" selected value="">
											-- โปรดเลือก --
										</option>
										<option value="1">
											น้อยกว่า 1,000 บาท
										</option>
										<option value="2">
											1,000 - 3,000 บาท
										</option>
										<option value="3">
											3,000 - 5,000 บาท
										</option>
										<option value="4">
											มากกว่า 5,000 บาท
										</option>
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<p>รูปแบบการท่องเที่ยว</p><select class="custom-select d-block col" id="car" name="travel_form" required="">
										<option disabled hidden="" selected value="">
											-- โปรดเลือก --
										</option>
										<option value="ครอบครัว">ครอบครัว</option>
										<option value="กลุ่มเพื่อน">กลุ่มเพื่อน</option>
										<option value="แพคเกจท่องเที่ยว">แพคเกจท่องเที่ยว </option>
										<option value="อื่นๆ">อื่นๆ </option>
									</select>
								</div>
								<div class="form-group col-md-6">
									<p>ยานพาหนะในการเดินทาง</p><select class="custom-select d-block col" id="car" name="car" required="">
										<option disabled hidden="" selected value="">
											-- โปรดเลือก --
										</option>
										<option value="รถส่วนตัว">
											รถส่วนตัว
										</option>
										<option value="รถประจำทาง">
											รถประจำทาง
										</option>
										<option value="รถบัส">
											รถบัส
										</option>
										<option value="รถตู้">
											รถตู้
										</option>
										<option value="รถเช่า">
											รถเช่า
										</option>
										<option value="อื่นๆ">
											อื่นๆ
										</option>
									</select>
								</div>
								</div>
								<div class="form-row">
								<div class="form-group col-md-6">
									<p>ระยะเวลาที่ท่านท่องเที่ยว</p><select class="custom-select d-block col" id="traveltime" name="traveltime" required="">
										<option disabled hidden="" selected value="">
											-- โปรดเลือก --
										</option>
										<option value="1">
											ไปเช้าเย็นกลับ
										</option>
										<option value="2">
											2 - 3 วัน
										</option>
										<option value="3">
											4 – 5 วัน
										</option>
										<option value="4">
											6-7 วัน
										</option>
										<option value="5">
											1 อาทิตย์ขึ้นไป
										</option>

									</select>
								</div>


								<div class="form-group col-md-6">
									<p>ที่พัก</p><select class="custom-select d-block col" id="camp" name="camp" required="">
										<option disabled hidden="" selected value="">
											-- โปรดเลือก --
										</option>
										<option value="ไม่พัก">
											ไม่พัก
										</option>
										<option value="บ้านญาติ">
											บ้านญาติ
										</option>
										<option value="โรงแรม">
											โรงแรม
										</option>
										<option value="รีสอร์ท">
											รีสอร์ท
										</option>
									</select>
								</div>

							</div>
							<div class="text-right">
								<button class="btn btn-outline-primary" type="submit" name="guide">ค้นหาสถานที่</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>