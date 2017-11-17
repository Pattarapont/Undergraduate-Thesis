<div class="container">
<h1>กรุณากรอกข้อมูลของท่าน</h1>
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				ข้อมูลส่วนตัว
			</div>
			<div class="card-body ">
				<form id="inputpersonal" class="was-validated" action="./include/getvariable.php" method="POST">

					<div class="form-group">
						<p>เพศ</p>
						<label class="custom-control custom-radio">
							<input id="gender" name="gender" value="1" type="radio" class="custom-control-input" required>
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">ชาย</span>
						</label>
						<label class="custom-control custom-radio">
							<input id="gender" name="gender" value="0" type="radio" class="custom-control-input" required>
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">หญิง</span>
						</label>
					</div>

					<div class="form-group">
						<p>อายุ</p>
						<select class="custom-select d-block col" name="age" id="age" required>
							<option value="" selected disabled hidden>-- โปรดเลือกอายุ --</option>
							<option value="1">50 - 60 ปี</option>
							<option value="2">60 - 70 ปี</option>
							<option value="3">มากกว่า 70 ปี</option>
						</select>
					</div>

					<!-- <div class="form-group">
						<p>ภูมิลำเนา</p>
						<select class="custom-select d-block col" name="province" id="province" required>
							<option value="" selected disabled hidden>-- ภูมิลำเนาของท่าน --</option>
							<option value="1">พิษณุโลก</option>
							<option value="2">เพชรบูรณ์</option>
							<option value="3">เชียงใหม่</option>
							<option value="4">เชียงราย</option>
							<option value="5">นครสวรรค์</option>
							<option value="6">กรุงเทพมหานคร</option>
							<option value="7">อื่นๆ</option>
						</select>
					</div> -->


					<div class="form-group">
						<p>อาชีพก่อนเกษียณ</p>
						<select class="custom-select d-block col" name="career" id="career" required>
							<option value="" selected disabled hidden>-- โปรดเลือกอาชีพ --</option>
							<option value="1">รับราชการ</option>
							<option value="2">ธุรกิจส่วนตัว</option>
							<option value="3">ค้าขาย</option>
							<option value="4">พนักงานบริษัท</option>
							<option value="5">เกษตรกรรม</option>
							<option value="6">รับจ้างทั่วไป</option>
							<option value="7">อื่นๆ</option>
						</select>
					</div>

					<div class="form-group">
						<p>โรคประจำตัว</p>
						<label class="custom-control custom-radio">
							<input id="congenital_dis" name="congenital_dis" value="0" type="radio" class="custom-control-input" required>
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">ไม่มี</span>
						</label>
						<label class="custom-control custom-radio">
							<input id="congenital_dis" name="congenital_dis" value="1" type="radio" class="custom-control-input" required>
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">มี</span>
						</label>
					</div>

					<div class="form-group">
					<select class="custom-select d-block col" name="name_congenital_dis" id="name_congenital_dis" required>
						<!-- <select class="form-group custom-select d-block col" required> -->
						<option value="" selected disabled hidden>-- โปรดเลือกโรคประจำตัว --</option>
						<option value="1">โรคหัวใจ</option>
						<option value="2">เบาหวาน</option>
						<option value="3">ความดันโลหิต</option>
						<option value="4">ข้อเข่าเสื่อม</option>
						<option value="5">จอประสาทตาเสื่อม</option>
						<option value="6">โรคอื่นๆ</option>
					</select>
					</div>

					<div class="form-group">
						<p>การเคลื่อนไหวร่างกาย</p>
						<select class="custom-select d-block col" name="body_movement" id="body_movement" required>
							<option value="" selected disabled hidden>-- โปรดเลือกการเคลื่อนไหวร่างกาย --</option>
							<option value="1">เดินได้ปกติ</option>
							<option value="2">เดินได้เล็กน้อย</option>
							<option value="3">เดินได้เล็กน้อย/ใช้ไม้เท้า</option>
							<option value="4">เดินได้เล็กน้อย/ใช้รถเข็น</option>
							<option value="5">เดินไม่ได้/ใช้รถเข็น</option>
						</select>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
