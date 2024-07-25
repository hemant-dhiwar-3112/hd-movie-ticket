<?php
session_start();

include ('config.php');

mysqli_query($con, "update booking set USER_ID='' where book_ID='" . $_GET['id'] . "'");
$_SESSION['success'] = "Booking Clear Successfully";
header('location:profile.php');
?>