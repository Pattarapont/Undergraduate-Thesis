<?php include 'db_connect.php';?>
<?php
/*
$oldcase_db = "SELECT * FROM data_oldcase";
$result     = $conn->query($oldcase_db);
// check number row db
if ($result->num_rows > 0) {
// output data of each row
while ($row = $result->fetch_assoc()) {
echo "<br> id: ".$row["id_data_oldcase"].$row["province"]." ".$row["body_movement"]."<br>";
}
} else {
echo "0 results";
}
 */

function getold($conn) {
	$oldcase_db = "SELECT * FROM data_oldcase";
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

getold($conn);

?>