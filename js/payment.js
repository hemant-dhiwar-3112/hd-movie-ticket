let flag1 = 1;

let pfname = document.getElementById('pfname');
pfname.addEventListener('input', function () {
    let na = /^[A-Za-z ]+$/;
    if (pfname.value == "") {
        document.getElementById("pname").innerText = "The Name is required and can't be empty";
        document.getElementById("plname").style.color = "#843534";
        pfname.style.borderColor = "#843534";
        pfname.setAttribute('class', 'vali1 form-control p1');
        flag1 = 0;
    } else if (!na.test(pfname.value)) {
        document.getElementById("pname").innerText = "Enter valid Name";
        document.getElementById("plname").style.color = "#843534";
        pfname.style.borderColor = "#843534";
        pfname.setAttribute('class', 'vali1 form-control p1');
        flag1 = 0;
    } else {
        document.getElementById("pname").innerText = "";
        document.getElementById("plname").style.color = "#3c763d";
        pfname.style.borderColor = "#3c763d";
        pfname.setAttribute('class', 'vali2 form-control p1');
        flag1 = 1;
    }
});



let flag2 = 1;
let pfcard = document.getElementById('pfcard');
pfcard.addEventListener('input', function () {
    if (pfcard.value == "") {
        document.getElementById("pcard").innerText = "The Card Number is required and can't be empty";
        document.getElementById("plcard").style.color = "#843534";
        pfcard.style.borderColor = "#843534";
        pfcard.setAttribute('class', 'vali1 form-control p1');
        flag2 = 0;
    }
    else if (isNaN(pfcard.value)) {
        document.getElementById("pcard").innerText = "Enetr valid crad number";
        document.getElementById("plcard").style.color = "#843534";
        pfcard.style.borderColor = "#843534";
        pfcard.setAttribute('class', 'vali1 form-control p1');
        flag2 = 0;
    } else if (pfcard.value.length != 16) {
        document.getElementById("pcard").innerText = "The Card Number must 16 characters long";
        document.getElementById("plcard").style.color = "#843534";
        pfcard.style.borderColor = "#843534";
        pfcard.setAttribute('class', 'vali1 form-control p1');
        flag2 = 0;
    }
    else {
        document.getElementById("pcard").innerText = "";
        document.getElementById("plcard").style.color = "#3c763d";
        pfcard.style.borderColor = "#3c763d";
        pfcard.setAttribute('class', 'vali1 form-control p1');
        flag2 = 1;
    }
});


let flag3 = 1;
let pfex1 = document.getElementById('pfex1');
pfex1.addEventListener('input', function () {
    let d = new Date();
    if (pfex1.value == "") {
        if (pfex2.value == "") {
            document.getElementById("pex1").innerText = "The Expiration date is required and can't be empty";
            document.getElementById("plex1").style.color = "#843534";
            pfex1.style.borderColor = "#843534";
            pfex1.setAttribute('class', 'vali1 form-control p1');
            pfex2.style.borderColor = "#843534";
            pfex2.setAttribute('class', 'vali1 form-control p1');
            flag3 = 0;
        }
        else {
            document.getElementById("pex1").innerText = "Enter valid date";
            document.getElementById("plex1").style.color = "#843534";
            pfex1.style.borderColor = "#843534";
            pfex1.setAttribute('class', 'vali1 form-control p1');
            pfex2.style.borderColor = "#843534";
            pfex2.setAttribute('class', 'vali1 form-control p1');
            flag3 = 0;
        }
    }
    else if (pfex2.value == d.getFullYear() && pfex1.value <= d.getMonth()) {
        document.getElementById("pex1").innerText = "Card is Expiration ";
        document.getElementById("plex1").style.color = "#843534";
        pfex1.style.borderColor = "#843534";
        pfex1.setAttribute('class', 'vali1 form-control p1');
        pfex2.style.borderColor = "#843534";
        pfex2.setAttribute('class', 'vali1 form-control p1');
        flag3 = 0;
    } else {
        document.getElementById("pex1").innerText = "";
        document.getElementById("plex1").style.color = "#3c763d";
        pfex1.style.borderColor = "#3c763d";
        pfex1.setAttribute('class', 'vali2 form-control p1');
        pfex2.style.borderColor = "#3c763d";
        pfex2.setAttribute('class', 'vali2 form-control p1');
        flag3 = 1;
    }
});
let pfex2 = document.getElementById('pfex2');
pfex2.addEventListener('input', function () {
    if (pfex2.value == "" && pfex1.value == "") {
        document.getElementById("pex1").innerText = "The Expiration date is required and can't be empty";
        document.getElementById("plex1").style.color = "#843534";
        pfex1.style.borderColor = "#843534";
        pfex1.setAttribute('class', 'vali1 form-control p1');
        pfex2.style.borderColor = "#843534";
        pfex2.setAttribute('class', 'vali1 form-control p1');
        flag3 = 0;
    } else if (pfex2.value == d.getFullYear() && pfex1.value <= d.getMonth()) {
        document.getElementById("pex1").innerText = "Card is Expiration ";
        document.getElementById("plex1").style.color = "#843534";
        pfex1.style.borderColor = "#843534";
        pfex1.setAttribute('class', 'vali1 form-control p1');
        pfex2.style.borderColor = "#843534";
        pfex2.setAttribute('class', 'vali1 form-control p1');
        flag3 = 0;
    }
    else if (pfex2.value > d.getFullYear()) {
        document.getElementById("pex1").innerText = "Card is Expiration ";
        document.getElementById("plex1").style.color = "#843534";
        pfex1.style.borderColor = "#843534";
        pfex1.setAttribute('class', 'vali1 form-control p1');
        pfex2.style.borderColor = "#843534";
        pfex2.setAttribute('class', 'vali1 form-control p1');
        flag3 = 0;
    } else {
        document.getElementById("pex1").innerText = "";
        document.getElementById("plex1").style.color = "#3c763d";
        pfex1.style.borderColor = "#3c763d";
        pfex1.setAttribute('class', 'vali2 form-control p1');
        pfex2.style.borderColor = "#3c763d";
        pfex2.setAttribute('class', 'vali2 form-control p1');
        flag3 = 1;
    }
});


let flag4 = 1;
let pfcvv = document.getElementById('pfcvv');
pfcvv.addEventListener('input', function () {
    if (pfcvv.value == "") {
        document.getElementById("pcvv").innerText = "The CVV is required and can't be empty";
        document.getElementById("plcvv").style.color = "#843534";
        pfcvv.style.cssText = "border-color:#843534;";
        document.getElementById("group").style.margintop = "-136px";
        pfcvv.setAttribute('class', 'vali1 form-control p1');
        flag4 = 0;
    }
    else if (pfcvv.value.length != 3) {
        document.getElementById("pcvv").innerText = "The CVV must 3 characters long";
        document.getElementById("plcvv").style.color = "#843534";
        pfcvv.style.borderColor = "#843534";
        pfcvv.setAttribute('class', 'vali1 form-control p1');
        flag4 = 0;
    } else if (isNaN(pfcvv.value)) {
        document.getElementById("pcvv").innerText = "Enter valid CVV";
        document.getElementById("plcvv").style.color = "#843534";
        pfcvv.style.borderColor = "#843534";
        pfcvv.setAttribute('class', 'vali1 form-control p1');
        flag4 = 0;
    }
    else {
        document.getElementById("pcvv").innerText = "";
        document.getElementById("plcvv").style.color = "#3c763d";
        pfcvv.style.borderColor = "#3c763d";
        pfcvv.setAttribute('class', 'vali2 form-control p1');
        flag4 = 1;
    }
});


function validate() {
    let flag = 1;
    if (pfname.value == "") {
        document.getElementById("pname").innerText = "The Name is required and can't be empty";
        document.getElementById("plname").style.color = "#843534";
        pfname.style.borderColor = "#843534";
        pfname.setAttribute('class', 'vali1 form-control p1');
        flag = 0;
    }
    if (pfcard.value == "") {
        document.getElementById("pcard").innerText = "The Card Number is required and can't be empty";
        document.getElementById("plcard").style.color = "#843534";
        pfcard.style.borderColor = "#843534";
        pfcard.setAttribute('class', 'vali1 form-control p1');
        flag = 0;
    }

    if (pfex2.value == "" && pfex1.value == "") {
        document.getElementById("pex1").innerText = "The Expiration date is required and can't be empty";
        document.getElementById("plex1").style.color = "#843534";
        pfex1.style.borderColor = "#843534";
        pfex1.setAttribute('class', 'vali1 form-control p1');
        pfex2.style.borderColor = "#843534";
        pfex2.setAttribute('class', 'vali1 form-control p1');
        flag = 0;
    }

    if (pfcvv.value == "") {
        document.getElementById("pcvv").innerText = "The CVV is required and can't be empty";
        document.getElementById("plcvv").style.color = "#843534";
        pfcvv.style.borderColor = "#843534";
        pfcvv.setAttribute('class', 'vali1 form-control p1');
        flag = 0;
    }

    console.log
    if (flag === 1 && flag1 === 1 && flag2 === 1 && flag3 === 1 && flag4 === 1) {
        return true;
    }
    else {
        return false;
    }


}