<?php 
    $uname=$_POST['username'];
    $pass=$_POST['password'];

    $con=mysqli_connect("localhost", "root", "", "gfc");

    $sql = "SELECT * FROM accounts WHERE nickname = '$uname' AND password = '$pass'";
    $result = $con->query($sql);

    if ($result->numRows > 0) {
        echo "You are logged in!";

        
    } else {
        echo "Wrong username or password!";
    }
?>

