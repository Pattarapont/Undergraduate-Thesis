<?php
mysql_connect("localhost", "root", "root");
mysql_select_db("mydatabase");

$strSQL    = "SELECT * FROM member WHERE SID = '".trim($_GET['sid'])."' AND UserID = '".trim($_GET['uid'])."' ";
$objQuery  = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
if (!$objResult) {
	echo "Activate Invalid !";
} else {
	$strSQL   = "UPDATE member SET Active = 'Yes'  WHERE SID = '".trim($_GET['sid'])."' AND UserID = '".trim($_GET['uid'])."' ";
	$objQuery = mysql_query($strSQL);

	echo "Activate Successfully !";
}

mysql_close();
?>