<?php
session_start();
if (!isset($_SESSION['user'])) {
  header('location:login.php');
}
extract($_POST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/styleal.css">

</head>

<body>

  <div id="mainContainer" class="">

    <div class="row bor">
      <h2 style="margin: 13px;">BANK</h2>
    </div>
    <dl class="bor" style="height:60px;">
      <dt class="flo">Merchant</dt>
      <dd class="flo" style="margin-left: 160px">:Shop Street</dd><br>
      <dt class="flo">Transaction Amount</dt>
      <dd class="flo" style="margin-left: 81px">:INR
        <?php echo $_SESSION['amount']; ?>
      </dd><br>
      <dt class="flo">Debit Card</dt>
      <dd class="flo" style="margin-left: 155px">:
        <?php echo $_POST['number']; ?>
      </dd>
    </dl>

    <form name="form1" id="form1" method="post" action="complete_payment.php" class="bor">
      <div class="page-heading">
        <h6 class="form-heading">Authenticate Payment</h6>
        <p class="form-subheading" style="font-size: 14px;">OTP sent to your mobile number ending with
          <strong>1343</strong>
        </p>
      </div>

      <div class="row formInputSection">
        <div style="width: 55%;">
          <label style="font-size:15px;">
            Enter One Time Password (OTP)<br>
            <input type="text" name="otp" class="optPass" maxlength="6" autocomplete="off"
              placeholder="Enter 6 digit otp">
          </label>
        </div>
        <div class="large-5 columns">
          <button class="btnn" onClick="ValidateForm()">Make Payment</button>
        </div>
      </div>
      <div class="otp"><a class="otp-send" href="">Resend OTP</a>
      </div>
      <p>
        <a class="tryAgain" href="movie.php">Go back</a> to merchant
      </p>
    </form>
  </div>
  <script>
    document.onmousedown = rightclickD;
    function rightclickD(e) {
      e = e || event;
      if (e.button == 2) {
        alert('Function Disabled...');
        return false;
      }
    }
    function ValidateForm() {
      var regPin = RegExp("^[0-9]{4,6}$");
      if (document.form1.customerpin.value == "" || !document.form1.customerpin.value.match(regPin)) {
        alert("Please enter a valid 6 digit One Time Password (OTP) receive on your registered Mobile Number."); document.form1.customerpin.focus(); return false;
      }
      else {
        document.form1.submit();
      }

    }
  </script>

</body>

</html>