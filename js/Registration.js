// ====================================== registration ========================

// ======================== name ==========================
let flag1 = 1;

var fname = document.getElementById('fname');
fname.addEventListener('input', function () {
  let na = /^[A-Za-z ]+$/;
  if (fname.value === "") {
    document.getElementById("rname").innerText = "The Name is required and can't be empty";
    document.getElementById("iname").style.color = "#843534";
    fname.style.borderColor = "#843534";
    fname.setAttribute('class', 'vali1 form-control');
    flag1 = 0;
  }
  else if (!na.test(fname.value)) {
    document.getElementById("rname").innerText = "Enter Valid name";
    document.getElementById("iname").style.color = "#843534";
    fname.style.borderColor = "#843534";
    fname.setAttribute('class', 'vali1 form-control');
    flag1 = 0;
  }
  else {
    document.getElementById("rname").innerText = "";
    document.getElementById("iname").style.color = "#3c763d";
    fname.style.borderColor = "#3c763d";
    fname.setAttribute('class', 'vali2 form-control');
    flag1 = 1;
  }
});

// ========================== age ====================
let flag2 = 1;
var fage = document.getElementById('fage');
fage.addEventListener('input', function () {
  if (fage.value === "") {
    document.getElementById("rage").innerText = "The Age is required and can't be empty";
    document.getElementById("iage").style.color = "#843534";
    fage.style.borderColor = "#843534";
    fage.setAttribute('class', 'vali1 form-control');
    flag2 = 0;
  } else if (isNaN(fage.value)) {
    document.getElementById("rage").innerText = "Enter Valid Age";
    document.getElementById("iage").style.color = "#843534";
    fage.style.borderColor = "#843534";
    fage.setAttribute('class', 'vali1 form-control');
    flag2 = 0;
  } else if (fage.value.length > 2) {
    document.getElementById("rage").innerText = "Enter Valid Age";
    document.getElementById("iage").style.color = "#843534";
    fage.style.borderColor = "#843534";
    fage.setAttribute('class', 'vali1 form-control');
    flag2 = 0;
  }
  else {
    document.getElementById("rage").innerText = "";
    document.getElementById("iage").style.color = "#3c763d";
    fage.style.borderColor = "#3c763d";
    fage.setAttribute('class', 'vali2 form-control');
    flag2 = 1;
  }
});

// ======================= gender ==============================
let flag3 = 1;
var fgender = document.getElementById('fgender');
fgender.addEventListener('input', function () {
  if (fgender.value === "") {
    document.getElementById("rgender").innerText = "The Gender is required and Select male/female";
    document.getElementById("igender").style.color = '#843534';
    document.getElementById("igender").style.borderColor = "#843534";
    document.getElementById("igender").setAttribute('class', 'vali1');
    flag3 = 0;
  } else {
    document.getElementById("rgender").innerText = "";
    document.getElementById("igender").style.color = '#3c763d';
    document.getElementById("igender").style.borderColor = "#3c763d";
    document.getElementById("igender").setAttribute('class', 'vali2');
    flag3 = 1;
  }
});

// ============================ Moblie Number ===================================
let flag4 = 1;
var fphone = document.getElementById('fphone');
fphone.addEventListener('input', function () {
  let num = /^[6-9]+[0-9]{0,10}$/;
  if (fphone.value === "") {
    document.getElementById("rphone").innerText = "The Moblie Number is required and can't be empty";
    document.getElementById("iphone").style.color = "#843534";
    fphone.style.borderColor = "#843534";
    fphone.setAttribute('class', 'vali1 form-control');
    flag4 = 0;
  } else if (!num.test(fphone.value)) {
    document.getElementById("rphone").innerText = "Enter a valid Mobile Number";
    document.getElementById("iphone").style.color = "#843534";
    fphone.style.borderColor = "#843534";
    fphone.setAttribute('class', 'vali1 form-control');
    flag4 = 0;
  } else if (fphone.value.length != 10) {
    document.getElementById("rphone").innerText = "Enter a valid Mobile Number";
    document.getElementById("iphone").style.color = "#843534";
    fphone.style.borderColor = "#843534";
    fphone.setAttribute('class', 'vali1 form-control');
    flag4 = 0;
  }
  else {
    document.getElementById("rphone").innerText = "";
    document.getElementById("iphone").style.color = "#3c763d";
    fphone.style.borderColor = "#3c763d";
    fphone.setAttribute('class', 'vali2 form-control');
    flag4 = 1;
  }
});

// ===================================== Email ===============================
let flag5 = 1;
var femail = document.getElementById('femail');
femail.addEventListener('input', function () {
  let em = /^[A-Za-z][A-Za-z0-9._]{3,20}@[A-Za-z0-9]{4,8}.[A-Za-z.]{2,9}$/;

  if (femail.value == "") {
    document.getElementById("remail").innerText = "The Email is required and can't be empty";
    document.getElementById("iemail").style.color = "#843534";
    femail.style.borderColor = "#843534";
    femail.setAttribute('class', 'vali1 form-control');
    flag5 = 0;
  }
  else if (!em.test(femail.value)) {
    document.getElementById("remail").innerText = "Enter Valid Email";
    document.getElementById("iemail").style.color = "#843534";
    femail.style.borderColor = "#843534";
    femail.setAttribute('class', 'vali1 form-control');
    flag5 = 0;
  }
  else {
    document.getElementById("remail").innerText = "";
    document.getElementById("iemail").style.color = "#3c763d";
    femail.style.borderColor = "#3c763d";
    femail.setAttribute('class', 'vali2 form-control');
    flag5 = 1;
  }
});

// ================================= pssword =======================
let flag6 = 1;
var fpass = document.getElementById('fpass');
fpass.addEventListener('input', function () {
  if (fpass.value == "") {
    document.getElementById("rpass").innerText = "The Password is required and can't be empty";
    document.getElementById("ipass").style.color = "#843534";
    fpass.style.borderColor = "#843534";
    fpass.setAttribute('class', 'vali1 form-control');
    flag6 = 0;
  }
  else if (fpass.value.length < 6) {
    document.getElementById("rpass").innerText = "The Password must be more than 6 characters long";
    document.getElementById("ipass").style.color = "#843534";
    fpass.style.borderColor = "#843534";
    fpass.setAttribute('class', 'vali1 form-control');
    flag6 = 0;
  } else {
    document.getElementById("rpass").innerText = "";
    document.getElementById("ipass").style.color = "#3c763d";
    fpass.style.borderColor = "#3c763d";
    fpass.setAttribute('class', 'vali2 form-control');
    flag6 = 1;
  }
});

// ====================== com password ==========================
let flag7 = 1;
var fcom_pass = document.getElementById('fcom_pass');
fcom_pass.addEventListener('input', function () {
  if (fcom_pass.value == "") {
    document.getElementById("rcom_pass").innerText = "Please Enter confirme Password";
    document.getElementById("icom_pass").style.color = "#843534";
    fcom_pass.style.borderColor = "#843534";
    fcom_pass.setAttribute('class', 'vali1 form-control');
    flag7 = 0;
  }
  else if (fcom_pass.value.length < 6) {
    document.getElementById("rcom_pass").innerText = "The Password must be more than 6 characters long";
    document.getElementById("icom_pass").style.color = "#843534";
    fcom_pass.style.borderColor = "#843534";
    fcom_pass.setAttribute('class', 'vali1 form-control');
    flag7 = 0;
  } else if (fcom_pass.value != fpass.value) {
    document.getElementById("rcom_pass").innerText = "Password doesn't  macth";
    document.getElementById("icom_pass").style.color = "#843534";
    fcom_pass.style.borderColor = "#843534";
    fcom_pass.setAttribute('class', 'vali1 form-control');
    flag7 = 0;
  }
  else {
    document.getElementById("rcom_pass").innerText = "";
    document.getElementById("icom_pass").style.color = "#3c763d";
    fcom_pass.style.borderColor = "#3c763d";
    fcom_pass.setAttribute('class', 'vali2 form-control');
    flag7 = 1;
  }
});

// ========================================= submit ==================

function validate() {
  let flag = 1;
  if (fname.value === "") {
    document.getElementById("rname").innerText = "The Name is required and can't be empty";
    document.getElementById("iname").style.color = "#843534";
    fname.style.borderColor = "#843534";
    fname.setAttribute('class', 'vali1 form-control');
    flag = 0;
  }

  if (fage.value === "") {
    document.getElementById("rage").innerText = "The Age is required and can't be empty";
    document.getElementById("iage").style.color = "#843534";
    fage.style.borderColor = "#843534";
    fage.setAttribute('class', 'vali1 form-control');
    flag = 0;
  }

  if (fgender.value == "") {
    document.getElementById("rgender").innerText = "The Gender is required and Select male/female";
    document.getElementById("igender").style.color = '#843534';
    document.getElementById("igender").style.borderColor = "#843534";
    document.getElementById("igender").setAttribute('class', 'vali1');
    flag = 0;
  }
  if (fphone.value === "") {
    document.getElementById("rphone").innerText = "The Moblie Number is required and can't be empty";
    document.getElementById("iphone").style.color = "#843534";
    fphone.style.borderColor = "#843534";
    fphone.setAttribute('class', 'vali1 form-control');
    flag = 0;
  }
  if (femail.value == "") {
    document.getElementById("remail").innerText = "The Email is required and can't be empty";
    document.getElementById("iemail").style.color = "#843534";
    femail.style.borderColor = "#843534";
    femail.setAttribute('class', 'vali1 form-control');
    flag = 0;
  }
  if (fpass.value == "") {
    document.getElementById("rpass").innerText = "Please Enter confirme Password";
    document.getElementById("ipass").style.color = "#843534";
    fpass.style.borderColor = "#843534";
    fpass.setAttribute('class', 'vali1 form-control');
    flag = 0;
  }
  if (fcom_pass.value == "") {
    document.getElementById("rcom_pass").innerText = "Please Enter confirme Password";
    document.getElementById("icom_pass").style.color = "#843534";
    fcom_pass.style.borderColor = "#843534";
    fcom_pass.setAttribute('class', 'vali1 form-control');
    flag = 0;
  }
  if (flag === 1 && flag1 === 1 && flag2 === 1 && flag3 === 1 && flag4 === 1 && flag5 === 1 && flag6 === 1 && flag7 === 1) {
    return true;
  }
  else {
    return false;
  }
}


