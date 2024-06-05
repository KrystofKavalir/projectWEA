<?php
$con = mysqli_connect("localhost", "root", "", "gfc"); 

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$data = json_decode($_POST["data"], true);
$enteredBio = mysqli_real_escape_string($con, $data["enteredBio"]);
$userId = mysqli_real_escape_string($con, $data["spId"]); 

/
$query = "UPDATE accounts SET bio = '$enteredBio' WHERE id = '$userId'";

if (mysqli_query($con, $query)) {
    echo "Bio updated successfully!";
} else {
    echo "Error: " . mysqli_error($con); 
}

mysqli_close($con);
?>