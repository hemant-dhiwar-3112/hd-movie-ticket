<?php
$del_id=$_GET['id'];
include 'config.php';
$sql2 = "delete from booking_cancel where book_ID='{$del_id}'";
$result2 = mysqli_query($con, $sql2) or die("not database");
header("location: booking_detail.php");
?>