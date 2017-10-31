<?php include 'db_connect.php';?>
<?php

function getold($conn) {
	$oldcase_db = "SELECT * FROM data_oldcase ORDER BY  `id_data_oldcase` ASC ";
	$result     = $conn->query($oldcase_db);
	// check number row db
	if ($result->num_rows > 0) {
		// output data of each row
		while ($row = $result->fetch_assoc()) {
			echo "<br> รวมนะจ๊าาา: ".$row["id_data_oldcase"].$row["province"]." ".$row["body_movement"]."<br>";
			echo $row["id_data_oldcase"];
			echo $row["province"];
			echo $row["body_movement"];

		}
	} else {
		echo "0 results";
	}
}

function getjoin($conn) {
	$testjoin = "SELECT OC.gender, OC.career, DP.vehicle
	FROM data_oldcase AS OC
	join data_phitsanulok AS DP on OC.id_phitsanulok = DP.id_phitsanulok";
	$result = $conn->query($testjoin);
	// check number row db
	if ($result->num_rows > 0) {
		// output data of each row
		while ($row = $result->fetch_assoc()) {
			// echo "<br> รวมนะจ๊าาา: ".$row["id_data_oldcase"].$row["province"]." ".$row["body_movement"]."<br>";
			echo $row["id_phitsanulok"];

		}
	} else {
		echo "0 results";
	}
}

getold($conn);
// getjoin($conn);
?>