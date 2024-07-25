<?php include('header.php');
// if (!isset($_SESSION['user'])) {
//     header('location:login.php');
// } ?>

<link rel="stylesheet" href="./css/styleal.css">

<style>
    .vali1:hover {
        box-shadow: 1px 1px 5px 2px #843534;
    }

    .vali2:hover {
        box-shadow: 1px 1px 5px 2px #3c763d;
    }

    .vali3 {
        font-size: 83%;
        color: #f13e3e;
        margin-top: 7px;
        font-family: math;
    }

    .pp {
        padding: 15px 25px;
        margin: auto;
    }


    .col-md-6 {
        text-align: left;
        font-size: 20px;
        width: 200px;
        font-family: abcde;
    }
</style>

</div>
<div class="content">
    <div class="wrap">
        <div class="content-top">
            <h3 style="font-size: 2em;">Payment</h3>
            <div class="col">
                <form action="bank.php" method="post" id="form1" onsubmit="return validate()">
                    <div style="margin-bottom:50px; border: 1px solid #d5c9c9;">

                        <div class="row"
                            style="    border-bottom: 1px solid #d5c9c9;     background: #e9e5e5; padding: 15px 25px;height: auto;">
                            <div class="col-md-6">
                                <span>CREDIT/DEBIT CARD PAYMENT</span>
                            </div>
                            <div class="" style="float: right;  margin-top: -50px;">

                                <img src="./images/visa.png">
                                <img src="./images/mastercard.png">
                                <img src="./images/amex.png">
                            </div>
                        </div>

                        <div class="form-group pp">
                            <label class="control-label" id="plname">CARD HOLDER NAME</label><br>
                            <input type="text" class="form-control p p1" name="number"
                                title="Enter 16 digit card number" id="pfname">
                            <div id="pname" class="vali3"></div>
                        </div>

                        <div class="form-group pp">
                            <label class="control-label" id="plcard">Card Number</label><br>
                            <input type="text" class="form-control p p1" name="number"
                                title="Enter 16 digit card number" id="pfcard">
                            <div id="pcard" class="vali3"></div>
                        </div>

                        <div class="form-group pp">
                            <label class="control-label" id="plex1">Expiration date</label><br>
                            <!-- <input type="text" class="form-control p1 p" name="date" id="pfex"> -->
                            <select name="" id="pfex1" style="width: 33%; height: 37px; padding: 0 0 0 20px;"
                                class="form-control p p1">
                                <option value="">Month</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>


                            </select>
                            <select name="" id="pfex2"
                                style="width: 33%; padding: 0 0 0 20px; height: 37px; margin-left: 20px;"
                                class="form-control p p1">
                                <option value="">Year</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                                <option value="2030">2030</option>
                                <option value="2031">2031</option>
                                <option value="2032">2032</option>
                                <option value="2033">2033</option>
                            </select>
                            <!-- <input type="text" class="form-control p1 p" name="date" id="pfex"> -->

                            <div id="pex1" class="vali3"></div>
                        </div>

                        <div class="form-group pp">
                            <label class="control-label" id="plcvv">CVV</label><br>
                            <input type="text" class="form-control p1 p" name="cvv" id="pfcvv">
                            <div id="pcvv" class="vali3"></div>
                        </div>

                        <div class="form-group pp">
                            <button class="btn btn1">Make Payment</button>
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
</div>
<?php include('footer.php'); ?>
</div>
<?php
$_SESSION['screen'] = $_POST['screen'];
$_SESSION['seats'] = $_POST['seat'];
$_SESSION['amount'] = $_POST['rup'];
$_SESSION['date'] = $_POST['date'];
$_SESSION['show_time'] = $_POST['time'];
?>

<script src="./js/payment.js"></script>