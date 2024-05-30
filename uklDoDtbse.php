<?php

$data = json_decode($_POST["data"], true);


$username = $data["username"];
$password = $data["password"];


$con = mysqli_connect("localhost", "root", "", "gfc");


if (!$con) {
  die("Connection failed: ". mysqli_connect_error());
}


$data = json_decode($_POST["data"], true);

$username = $data["username"];
$password = $data["password"];

$query = "INSERT INTO accounts (nickname, password) VALUES ('$username', '$password')";
if (mysqli_query($con, $query)) {
  echo "Data saved successfully!";
} else {
  echo "Error: ". $query. "<br>". mysqli_error($con);
}


mysqli_close($con);
?>