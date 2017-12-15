<?php
include 'include/db_connect.php';
include 'include/include_head.php';
include 'menu.php';
// session_start();

$id_location = $_SESSION['id_location'];
$idUser      = $_SESSION['id_user'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_POST['save_location'])) {

		$memo      = $conn->real_escape_string($_REQUEST['memo']);
		$save_date = $conn->real_escape_string($_REQUEST['datetime']);

		$s_location = "INSERT INTO transcript (id_user, id_location, memo_detail, save_date)
		VALUES ('$idUser', '$id_location', '$memo', '$save_date')";

		if ($conn->query($s_location) === true) {

			header("Location: history.php");
			die();

		} else {
			echo "ERROR: Could not able to execute $sql. " .$mysqli->error;
		}

	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>save</title>
	<link href="" rel="stylesheet">
</head>
<body>
	<section>
		<!-- เริ่มกรอกข้อมูลส่วนตัว -->
		<form action="save_location.php" class="was-validated" method="POST">
			<div class="container" style="padding-top: 20px; padding-right: 10%; padding-bottom: 10px; padding-left: 10%;">
				<h1>กรุณากรอกข้อมูลของท่าน</h1>
				<div class="card">
					<div class="card-header">
						ข้อมูลส่วนตัว
					</div>
					<div class="card-body">
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="s_name_location">สถานที่ :</label> <input class="form-control" id="name" name="s_name_location" placeholder="กรุณากรอกสถานที่" required="" type="text" value="<?php echo $_SESSION['name_location'];?>">
							</div>
							<div class="form-group col-md-4">
								<label for="s_province">จังหวัด :</label> <input class="form-control" id="s_province" name="s_province" placeholder="กรุณากรอกจังหวัด" required="" type="text" value="<?php echo $_SESSION['name_province']?>">
							</div>
							<div class="form-group col-md-4">
								<label for="telephone">วันที่ :</label> <input class="form-control" name="datetime" required="" type="date">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
								<label for="memo">จดบันทึก :</label>
								<textarea class="form-control" id="memo" name="memo" placeholder="บักทึกข้อความ" required="" rows="4"></textarea>
							</div>
							<div class="form-group col-md-12">
								<div class="text-right">
									<button class="btn btn-outline-success" name="save_location" type="">บันทึกข้อมูล</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</section>
</body>
</html>