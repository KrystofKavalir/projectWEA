<?php
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "gfc";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $data = json_decode($_POST['data'], true); 

    $stmt = $conn->prepare("INSERT INTO data (date_calculated, avgDmg, dmgPer100, maxDmg, minDmg) 
                            VALUES (NOW(), :avgDmg, :dmgPer100, :maxDmg, :minDmg)");

    $stmt->bindParam(':avgDmg', $data['avgDmg']);
    $stmt->bindParam(':dmgPer100', $data['dmgPer100']);
    $stmt->bindParam(':maxDmg', $data['maxDmg']);
    $stmt->bindParam(':minDmg', $data['minDmg']);

    $stmt->execute();
    echo "Data saved successfully";

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null; 
?>