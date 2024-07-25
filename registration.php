<?php include('header.php'); ?>
<style>
  .vali1:hover {
    box-shadow: 1px 1px 5px 2px #843534;
  }

  .vali2:hover {
    box-shadow: 1px 1px 5px 2px #3c763d;
  }

  .vali3:focus {
    outline: none;
  }

  .rvali {
    font-size: 83%;
    color: #f13e3e;
    margin-top: 7px;
    font-family: math;
  }
</style>
</div>
<div class="content">
  <div class="wrap">
    <div class="content-top" style="min-height:300px;padding:25px">
      <div class="col">
        <div class="panel">
          <div class="panel-heading">Register</div>
          <div class="panel-body">
            <form action="process_registration.php" method="post" id="form1" onsubmit="return validate()">

              <div class="form-group">
                <span class="material-symbols-outlined " id="iname">account_circle</span>

                <input name="name" id="fname" type="text" size="25" placeholder="Name" class="form-control rf">

                <div id="rname" class="rvali"></div>
              </div>

              <div class="form-group" id="iage">
                <span class="material-symbols-outlined">person</span>
                <input name="age" type="text" size="25" placeholder="Age" class="form-control rf" id="fage">
                <div id="rage" class="rvali"></div>
              </div>


              <div class="form-group">
                <fieldset class="rf vali3"
                  style="margin: 0; padding: 0 28px 0 0px; width: 87.5%; border-radius: 4px; border-color: #fff;"
                  id="igender">
                  <span class="material-symbols-outlined">group</span>
                  <select name="gender" class="form-control "
                    style="width: 97%; padding: 0 0 0 50px;height: 35px; border: none;" id="fgender">
                    <option value>Select Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                </fieldset>
                <div id="rgender" class="rvali"></div>
              </div>

              <div class="form-group">
                <span class="material-symbols-outlined" id="iphone">account_box</span>
                <input name="phone" type="text" size="25" placeholder="Mobile Number" class="form-control rf"
                  id="fphone">
                <div id="rphone" class="rvali"></div>
              </div>

              <div class="form-group">
                <span class="material-symbols-outlined" id="iemail">mail</span>
                <input id="femail" name="email" type="text" size="25" placeholder="Email" class="form-control rf">
                <div id="remail" class="rvali"></div>
              </div>

              <div class="form-group">
                <span class="material-symbols-outlined" id="ipass">lock</span>
                <input name="password" type="password" size="25" placeholder="Password" class="form-control rf"
                  placeholder="Password" id="fpass">
                <div id="rpass" class="rvali"></div>
              </div>

              <div class="form-group">
                <span class="material-symbols-outlined" id="icom_pass">lock</span>
                <input name="cpassword" type="password" size="25" placeholder="Password" class="form-control rf"
                  placeholder="Password" id="fcom_pass">
                <div id="rcom_pass" class="rvali"></div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn rf" id="btn1">Submit</button>
              </div>
          </div>
        </div>
        </form>
      </div>
    </div>
    <div class="clear"></div>

  </div>
  <?php include('footer.php'); ?>
</div>
<script src="./js/Registration.js"></script>