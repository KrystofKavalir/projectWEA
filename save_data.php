<?php
  // Database connection settings
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "gfc";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get data from AJAX request
    $data = json_decode($_POST['data'], true); 

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO data (date_calculated, avgDmg, dmgPer100, maxDmg, minDmg) 
                            VALUES (NOW(), :avgDmg, :dmgPer100, :maxDmg, :minDmg)");

    // Bind parameters
    $stmt->bindParam(':avgDmg', $data['avgDmg']);
    $stmt->bindParam(':dmgPer100', $data['dmgPer100']);
    $stmt->bindParam(':maxDmg', $data['maxDmg']);
    $stmt->bindParam(':minDmg', $data['minDmg']);

    // Execute the statement
    $stmt->execute();
    echo "Data saved successfully";

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null; // Close the connection
?>