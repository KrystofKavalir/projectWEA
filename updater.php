<?php
$con = mysqli_connect("localhost", "root", "", "gfc"); 

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$data = json_decode($_POST["data"], true);
$field = mysqli_real_escape_string($con, $data["field"]);
$value = mysqli_real_escape_string($con, $data["value"]);
$userId = mysqli_real_escape_string($con, $data["spId"]); 

if ($field === 'bio') {
    $query = "UPDATE accounts SET bio = '$value' WHERE id = '$userId'";
    if (mysqli_query($con, $query)) {
        echo "Bio updated successfully!";
    } else {
        echo "Error updating bio: " . mysqli_error($con); 
    }
} else if ($field === 'uid') {
    $query = "UPDATE accounts SET uid = '$value' WHERE id = '$userId'";
    if (mysqli_query($con, $query)) {
        echo "UID updated successfully!";
    } else {
        echo "Error updating UID: " . mysqli_error($con); 
    }
} else if ($field === 'pfp') {
    $query = "UPDATE accounts SET pfp = '$value' WHERE id = '$userId'";
    if (mysqli_query($con, $query)) {
        echo "Pfp updated successfully!";
    } else {
        echo "Error updating pfp: " . mysqli_error($con); 
    }
} else {
    echo "Invalid field specified.";
}

mysqli_close($con);
?>