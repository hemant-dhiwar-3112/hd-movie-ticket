<?php

$id = $_GET['id'];

include 'config.php';
$sql = "delete from movie_registration where R_ID='{$id}'";
$result = mysqli_query($con, $sql) or die("not database");

$cav = bin2hex($pass);
$sql1 = "delete from movie_login where L_ID='{$id}'";
$result1 = mysqli_query($con, $sql1) or die("not database");

header("location: ./index.php");

mysqli_close($con);

?>