<?php include "db_connect.php" ?>
<?php
  // Create connection
  function connect_db($db_server, $db_username, $db_password, $db_dbname) {
    $conn = new mysqli($db_server, $db_username, $db_password, $db_dbname);

    // Check connection
    if ($conn->connect_error) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit;
    } else {
      //echo "Success: connected to MySQL";
    }

    if (!$conn->set_charset("utf8")) {
      printf("Error loading character set utf8: %s\n", $mysqli->error);
      exit();
    }

    return $conn;
  }

  // $con->close();

?>
