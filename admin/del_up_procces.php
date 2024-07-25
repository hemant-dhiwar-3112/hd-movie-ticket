<?php
$del_id=$_GET['id'];
include 'config.php';

$sql1 = "select poster from movie_news where M_ID='{$del_id}'";
$result1 = mysqli_query($con, $sql1) or die("not database");
$row1=mysqli_fetch_assoc($result1);
unlink("./images/" . $row1['poster']);


$sql2 = "delete from movie_news where M_ID='{$del_id}'";
$result2 = mysqli_query($con, $sql2) or die("not database");
header("location: del_movies.php");
?>
