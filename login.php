<?php include('header.php'); ?>
<div class="content wrap">
  <div class="content-top" style="min-height:300px;padding:25px">
    <div class="col">
      <div class="panel panel-default">
        <div class="panel-heading">Login</div>
        <div class="panel-body">
        <?php include('msgbox.php');?>
          <p class="login-box-msg">Sign in to start your session</p>
          <form action="process_login.php" method="POST">
            <div class="form-group">
              <span class="material-symbols-outlined">mail</span>
              <input name="Email" type="text" size="25" placeholder="Email" class="form-control rf" placeholder="Email" />
            </div>
            <div class="form-group ">
            <span class="material-symbols-outlined">lock</span> 
            <input name="Password" type="password" size="25" placeholder="Password" class="form-control rf"
                placeholder="Password">
              </div>
            <div class="form-group">
              <button type="submit" class="btn rf">Login</button>

              <p class="login-box-msg" style="padding-top:20px">New Here? <a href="registration.php" id="reg" >Register</a></p>
            </div>
        </div>
      </div>
      </form>
    </div>
    <div class="clear"></div>
  </div>
</div>
<?php include('footer.php'); ?>