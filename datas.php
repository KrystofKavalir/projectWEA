<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "gfc";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT id, nickname, password, bio, pfp, UID FROM accounts";
  $result = $conn->query($sql);

  $data = array();

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $data[] = $row;
    }
  }

  $conn->close();

  header('Content-type: application/json');
  echo json_encode($data);
?>