<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location:login.php');
}

//OTP Code
if ($_POST['otp'] == "123456") {
    $bookid = "BKID" . rand(1000000, 9999999);
    include ('config.php');
    mysqli_query($con, "INSERT into booking values('','$bookid','" . $_SESSION['user'] . "','HD RAMA TAKIES RAIPUR','" . $_SESSION['mo_name'] . "','" . $_SESSION['show_time'] . "','" . $_SESSION['screen'] . "','" . $_SESSION['seats'] . "','" . $_SESSION['date'] . "','" . $_SESSION['amount'] . "')");
    $_SESSION['success'] = "Bookings Done!";
} else {
    $_SESSION['error'] = "Payment Failed";
}
?>

<body>
    <table style='text-align:center;'>
        <tr>
            <td><STRONG>Transaction is being processed,</STRONG></td>
        </tr>
        <tr>
            <td>
                <div color='blue'>Please Wait <img style="width:25px; height:25px;" src="./images/Loading_icon.gif"
                        alt="">
                </div>
            </td>
        </tr>
        <tr>
            <td>(Do not 'RELOAD' this page or 'CLOSE' this page)</td>
        </tr>
    </table>
    <h2>
        <script>
            setTimeout(function () {
                window.location = "profile.php";
            }, 3000);
        </script>