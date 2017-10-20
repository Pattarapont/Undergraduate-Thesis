<div class="container">
<h1>กรุณากรอกข้อมูลการท่องเที่ยว</h1>
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				ข้อมูลการท่องเทื่ยว
			</div>
			<div class="card-body ">
				<form id="#" class="was-validated" action="#" method="post">
					<div class="form-group">
						<p>จังหวัดที่ต้องการท่องเที่ยว</p>
						<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" value="option1" required>
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">พิษณุโลก</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" value="option2" required>
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">เพชรบูรณ์</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" value="option3" required>
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">เชียงใหม่</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" value="option4" required>
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">เชียงราย</span>
						</label>
					</div>


					<div class="form-group">
						<p>ประเภทการท่องเที่ยว</p>
						<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" value="option1" required>
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">เชิงธรรมชาติ</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" value="option2" required>
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">เชิงวัฒนธรรม</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" value="option3" required>
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">ความสนใจส่วนบุคคล</span>
						</label>
					</div>

					<div class="form-group">
						<p>ท่านต้องการท่องเที่ยวรูปแบบ</p>
						<select class="custom-select d-block col" name="travel" id="travel" required>
							<option value="" selected disabled hidden>-- รูปแบบการท่องเที่ยว --</option>
							<option value="">ครอบครัว</option>
							<option value="1">กลุ่มเพื่อน</option>
							<option value="2">แพคเกจท่องเที่ยว </option>
							<option value="3">อื่นๆ </option>
						</select>
					</div>

					<div class="form-group">
						<p>ยานพาหนะในการเดินทาง</p>
						<select class="custom-select d-block col" name="car" id="car" required>
							<option value="" selected disabled hidden>-- โปรดเลือก --</option>
							<option value="1">รถส่วนตัว </option>
							<option value="2">รถประจำทาง</option>
							<option value="3">รถบัส</option>
							<option value="4">รถตู้</option>
							<option value="5">รถเช่า</option>
							<option value="6">อื่นๆ</option>
						</select>
					</div>

					<div class="form-group">
						<p>ระยะเวลาที่ท่านท่องเที่ยว</p>
						<select class="custom-select d-block col" name="traveltime" id="traveltime" required>
							<option value="" selected disabled hidden>-- โปรดเลือก --</option>
							<option value="1">ไปเช้าเย็นกลับ </option>
							<option value="2">2 - 3 วัน</option>
							<option value="3">4 – 5 วัน</option>
							<option value="4">1 - 2 อาทิตย์</option>
							<option value="5">มากกว่า 2 อาทิตย์</option>
						</select>
					</div>

					<div class="form-group">
						<p>ที่พัก</p>
						<select class="custom-select d-block col" name="camp" id="camp" required>
							<option value="" selected disabled hidden>-- โปรดเลือก --</option>
							<option value="1">บ้านตนเอง</option>
							<option value="2">บ้านญาติ</option>
							<option value="3">โรงแรม</option>
							<option value="4">รีสอร์ท</option>
						</select>
					</div>
					<div class="form-group">
						<p>งบประมาณ</p>
						<select class="custom-select d-block col" name="money" id="money" required>
							<option value="" selected disabled hidden>-- โปรดเลือก --</option>
							<option value="1">1000 บาท </option>
							<option value="2">1000 - 3000 บาท</option>
							<option value="3">3000 - 5000 บาท</option>
							<option value="4">มากกว่า 5000 บาท</option>
						</select>
					</div>
					<div class="text-right">
						<button type="button" class="btn btn-outline-primary">ค้นหาสถานที่</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>