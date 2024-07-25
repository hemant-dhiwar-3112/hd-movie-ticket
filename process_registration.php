<?php
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['password'];

include ('config.php');

$sql = "insert into movie_registration(R_NAME,R_AGE,R_GENDER,R_PHONE_NO,R_EMAIL) values('{$name}','{$age}','{$gender}','{$phone}','{$email}')";
$result = mysqli_query($con, $sql) or die("not database");

$cav = bin2hex($pass);
$sql1 = "insert into movie_login(L_EMAIL,L_PASSWORD) values('$email' ,'$cav')";
$result1 = mysqli_query( $con, $sql1) or die("not database");

header("location: ./login.php");

mysqli_close($con);
?>