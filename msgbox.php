<?php

// if(isset($_SESSION['success']))
// {?>

<style>
    .alert-success {
        background-color: #dff0d8;
        color: #3c763d;
        border-color: #d6e9c6;
    }

    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 10px;
    }

    .close {
        float: right;
        border: none;
        background-color: #dff0d8;
        font-size: 22px;
        opacity: .2;
        cursor: pointer;
    }

    .close:hover {
        opacity: 1;
    }

    .alert-danger {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
    }

    .cc:hover {
        opacity: 1;
        background-color: #f2dede;
    }
</style>
<?php
if (isset($_SESSION['success'])) { ?>
    <div class="alert alert-success" id='hideMe' onclick="hide()">
        <button type="button" class="close">&times;</button>
        <h4 style="margin-top: 0px;"> Success!</h4>
        <?php echo $_SESSION['success']; ?>
    </div>
<?php }

unset($_SESSION['success']);

if (isset($_SESSION['error'])) { ?>
    <div class="alert alert-danger" id='hideMe'>
        <button type="button" class="close cc" onclick="hide()">&times;</button>
        <h4 style="margin-top: 0px;"> Alert!</h4>
        <?php echo $_SESSION['error']; ?>
    </div>
    <?php }
unset($_SESSION['error']); ?>

<script>
    let hid = document.getElementById('hideMe');
    function hide() {
        hid.setAttribute('hidden', 'true');
    }
</script>