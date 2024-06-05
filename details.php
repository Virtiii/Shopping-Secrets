<?php
require("includes/common.php");
session_start();
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO checkout(fname, email, address,city,state,zip,payment) VALUES('$fname', '$email',''$address','$city','$state','$zip'.'$payment')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    // header('location: productwo.php');
}
?> 