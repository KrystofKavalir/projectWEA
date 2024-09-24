<?php
$con = mysqli_connect("localhost", "root", "", "gfc");
$data = json_decode($_POST["data"], true);


$minDmg = $data["minDmg"];
$maxDmg = $data["maxDmg"];
$dmgPer100 = $data["dmgPer100"];
$avgDmg = $data["avgDmg"];
$userId = $data["uziId"];

/*$checkUname = "SELECT * FROM accounts WHERE nickname = '$username'";
$result = $con->query($checkUname);



if ($result->numRows > 0) {
  echo "Username already taken!";
} else {
  if (!$con) {
    die("Connection failed: ". mysqli_connect_error());
  }
  */
  
  if (true) {
    $query = "INSERT INTO data (minDmg, maxDmg, dmgPer100, avgDmg, userId) VALUES ('$minDmg', '$maxDmg', '$dmgPer100', '$avgDmg', '$userId')";
  
    if (mysqli_query($con, $query)) {
      echo "Data saved successfully!";
    } else {
      echo "Error: ". $query. "<br>". mysqli_error($con);
    }
    mysqli_close($con);
  } else {
    die("Your passwords don't match!");
  }

?>