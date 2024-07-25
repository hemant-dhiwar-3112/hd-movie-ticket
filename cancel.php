<?php
session_start();

include ('config.php');
 

$result = mysqli_query($con, "select * from booking where book_ID='" . $_GET['id'] . "'");

$row1 = mysqli_fetch_assoc($result);

date_default_timezone_set('Asia/Kolkata');
echo $time = date('h:i:s a');
mysqli_query($con, "INSERT into booking_cancel values('','"  . $row1['USER_ID'] ."' ,'" . $row1['movie_name'] . "','" . $row1['show_time'] . "','" . $row1['screen'] . "','" . $row1['seats'] . "','" . $row1['book_date'] . "',' $time ','" . $row1['amount'] . "')");


mysqli_query($con, "delete from booking where book_ID='" . $_GET['id'] . "'");
$_SESSION['success'] = "Booking Cancelled Successfully";
header('location:profile.php');
?>