<?php
$con = mysqli_connect("localhost", "root", "", "gfc"); 

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$data = json_decode($_POST["data"], true);
$enteredPfp = mysqli_real_escape_string($con, $data["enteredPfp"]);
$userId = mysqli_real_escape_string($con, $data["spId"]); 


$query = "UPDATE accounts SET pfp = '$enteredPfp' WHERE id = '$userId'";

if (mysqli_query($con, $query)) {
    echo "Pfp updated successfully!";
} else {
    echo "Error: " . mysqli_error($con); 
}

mysqli_close($con);
?>