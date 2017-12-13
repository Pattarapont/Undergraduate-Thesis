<?php
/*
class mainClass {
public $name = "Pattarpon";
public function hello() {
echo "Hello OOP ".$this->name;
}
}
// hello();
$oCallHello = new mainClass();
$oCallHello->hello();

 */

$host     = "localhost";
$user     = "root";
$password = "";
$database = "et_cbr";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = new mysqli($host, $user, $password, $database);

// $conn->set_charset("utf8");

// Check connection
if ($conn->connect_error) {
	echo "Failed to connect to MySQL: ".$conn->connect_error;
	exit;
} else {
	// echo "<h1><center> WHO AM I </center></h1>";
}

if (!$conn->set_charset("utf8")) {
	printf("Error loading character set utf8: %s\n", $mysqli->error);
	exit();
}

/*
class Database {

private $host     = 'localhost';//ชื่อ Host
private $user     = 'root';//ชื่อผู้ใช้งาน ฐานข้อมูล
private $password = '';// password สำหรับเข้าจัดการฐานข้อมูล
private $database = 'et_cbr';//ชื่อ ฐานข้อมูล

public function connect() {

$conn = new mysqli($this->host, $this->user, $this->password, $this->database);

$conn->set_charset("utf8");

if ($conn->connect_error) {

die('Connect Error: '.$conn->connect_error);
} else {
echo "Who am i ";
}

return $conn;

}
}
$oCallDB = new Database();
$oCallDB->connect();
 */
?>