
function dashb() {
    document.getElementById('dsbrd').style.display = 'block';
    document.getElementById('mtngsdl').style.display = 'none';
    document.getElementById('stdnt').style.display = 'none';
    document.getElementById('unvrcts').style.display = 'none';
    document.getElementById('assors').style.display = 'none';
    document.getElementById('trnplc').style.display = 'none';
    document.getElementById('ripot').style.display = 'none';
    document.getElementById('assmnts').style.display = 'none';
    document.getElementById('monit').style.display = 'none';
}

function meetin() {
    document.getElementById('dsbrd').style.display = 'none';
    document.getElementById('mtngsdl').style.display = 'block';
    document.getElementById('stdnt').style.display = 'none';
    document.getElementById('unvrcts').style.display = 'none';
    document.getElementById('assors').style.display = 'none';
    document.getElementById('trnplc').style.display = 'none';
    document.getElementById('ripot').style.display = 'none';
    document.getElementById('assmnts').style.display = 'none';
    document.getElementById('monit').style.display = 'none';
}

function studnts() {
    document.getElementById('dsbrd').style.display = 'none';
    document.getElementById('mtngsdl').style.display = 'none';
    document.getElementById('stdnt').style.display = 'block';
    document.getElementById('unvrcts').style.display = 'none';
    document.getElementById('assors').style.display = 'none';
    document.getElementById('trnplc').style.display = 'none';
    document.getElementById('ripot').style.display = 'none';
    document.getElementById('assmnts').style.display = 'none';
    document.getElementById('monit').style.display = 'none';
}

function univrcti() {
    document.getElementById('dsbrd').style.display = 'none';
    document.getElementById('mtngsdl').style.display = 'none';
    document.getElementById('stdnt').style.display = 'none';
    document.getElementById('unvrcts').style.display = 'block';
    document.getElementById('assors').style.display = 'none';
    document.getElementById('trnplc').style.display = 'none';
    document.getElementById('ripot').style.display = 'none';
    document.getElementById('assmnts').style.display = 'none';
    document.getElementById('monit').style.display = 'none';
}

function assrs() {
    document.getElementById('dsbrd').style.display = 'none';
    document.getElementById('mtngsdl').style.display = 'none';
    document.getElementById('stdnt').style.display = 'none';
    document.getElementById('unvrcts').style.display = 'none';
    document.getElementById('assors').style.display = 'block';
    document.getElementById('trnplc').style.display = 'none';
    document.getElementById('ripot').style.display = 'none';
    document.getElementById('assmnts').style.display = 'none';
    document.getElementById('monit').style.display = 'none';
}

function trnnplc() {
    document.getElementById('dsbrd').style.display = 'none';
    document.getElementById('mtngsdl').style.display = 'none';
    document.getElementById('stdnt').style.display = 'none';
    document.getElementById('unvrcts').style.display = 'none';
    document.getElementById('assors').style.display = 'none';
    document.getElementById('trnplc').style.display = 'block';
    document.getElementById('ripot').style.display = 'none';
    document.getElementById('assmnts').style.display = 'none';
    document.getElementById('monit').style.display = 'none';
}

function rpots() {
    document.getElementById('dsbrd').style.display = 'none';
    document.getElementById('mtngsdl').style.display = 'none';
    document.getElementById('stdnt').style.display = 'none';
    document.getElementById('unvrcts').style.display = 'none';
    document.getElementById('assors').style.display = 'none';
    document.getElementById('trnplc').style.display = 'none';
    document.getElementById('ripot').style.display = 'block';
    document.getElementById('assmnts').style.display = 'none';
    document.getElementById('monit').style.display = 'none';
}

function assmts() {
    document.getElementById('dsbrd').style.display = 'none';
    document.getElementById('mtngsdl').style.display = 'none';
    document.getElementById('stdnt').style.display = 'none';
    document.getElementById('unvrcts').style.display = 'none';
    document.getElementById('assors').style.display = 'none';
    document.getElementById('trnplc').style.display = 'none';
    document.getElementById('ripot').style.display = 'none';
    document.getElementById('assmnts').style.display = 'block';
    document.getElementById('monit').style.display = 'none';
}

function montrin() {
    document.getElementById('dsbrd').style.display = 'none';
    document.getElementById('mtngsdl').style.display = 'none';
    document.getElementById('stdnt').style.display = 'none';
    document.getElementById('unvrcts').style.display = 'none';
    document.getElementById('assors').style.display = 'none';
    document.getElementById('trnplc').style.display = 'none';
    document.getElementById('ripot').style.display = 'none';
    document.getElementById('assmnts').style.display = 'none';
    document.getElementById('monit').style.display = 'block';
}

//============================================================================================
//============================================================================================


function login() {
    var uname = document.getElementById("uname");
    var pass = document.getElementById("pass");

    var unameSM = document.getElementById("unameSM");
    var passSM = document.getElementById("passSM");

    var loginSM = document.getElementById("loginSM");

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);
            if (t == "Please enter Username") {
                unameSM.innerHTML = t;
                unameSM.style.display = "block";
                passSM.style.display = "none";
                loginSM.style.display = "none";
            } else if (t == "Please enter Password") {
                unameSM.style.display = "none";
                passSM.innerHTML = t;
                passSM.style.display = "block";
                loginSM.style.display = "none";
            } else if (t == "Success") {
                unameSM.style.display = "none";
                passSM.style.display = "none";
                loginSM.innerHTML = t;
                loginSM.style.display = "block";
                window.location = "admin.php";
            } else {
                unameSM.style.display = "none";
                passSM.style.display = "none";
                loginSM.innerHTML = t;
                loginSM.style.display = "block";
            }
        }
    }
    var f = new FormData();
    f.append("uname", uname.value);
    f.append("pass", pass.value);
    r.open("POST", "loginProcess.php", true);
    r.send(f);

}

//////////////////////////////////////////////----///////////////////////////////////////////////////////////////////////
function INSselctST(ins_id) {

    // alert(ins_id);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (this.readyState == 4) {
            var t = r.responseText;

            // alert(t);

            document.getElementById('insst').innerHTML = t;

        }
    }

    var f = new FormData();
    f.append("inid", ins_id);

    r.open("POST", "inspectorStudentsSuper.php", true);
    r.send(f);

}

var elements = document.querySelectorAll('.clickable');

// Add an event listener to each element
elements.forEach(function (element) {
    element.addEventListener('click', function () {
        // Change the background color of the clicked element
        this.style.backgroundColor = 'yellow';

        // Reset the background color of the other elements
        elements.forEach(function (otherElement) {
            if (otherElement !== element) {
                otherElement.style.backgroundColor = '';
            }
        });
    });
});

///////////////////////////////////////////////////////////----/////////////////////////////////////////

function logout() {

    console.log('okkkkkkkk');

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (this.readyState == 4) {
            var t = r.responseText;

            // alert(t);

            if (t == "success") {
                location.reload();
            }

        }
    }

    r.open("POST", "logoutProcess.php", true);
    r.send();

}


function searchmonitorInspect() {

    // alert("ok");

    var sb = document.getElementById("sb").value;
    var sc = document.getElementById("sc").value;
    var su = document.getElementById("su").value;
    var sf = document.getElementById("sf").value;
    var sm = document.getElementById("sm").value;



    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (this.readyState == 4) {
            var t = r.responseText;

            // alert(t);

            document.getElementById("tb").innerHTML = t;

        }
    }


    r.open("GET", "monitoringInspectorProcess.php?sb=" + sb + "&sc=" + sc + "&su=" + su + "&sf=" + sf + "&sm=" + sm, true);
    r.send();

}


function superApproveMonitoring(insid) {
    var mtype = document.getElementById("sampr").value;

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var text = r.responseText;
            // alert(text);
            document.getElementById("imtbappr").innerHTML = text;

        }
    }

    var f = new FormData();
    f.append("mtype", mtype);
    f.append("insid", insid);

    r.open("GET", "superCheckedMonitored.php?mtype=" + mtype + "&insid=" + insid, true);
    r.send();
}

//////////////////////////////////////////////////////////////////////////////////////////////////////

function AdeselctST(ins_id, date) {
    var table = document.getElementById("selctdstdntssupr");
    var rows = table.getElementsByTagName("tr");

    console.log(rows.length);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var text = r.responseText;
            console.log(text);

        }
    }

    var f = new FormData();
    f.append("st_count", rows.length);
    f.append("ins_id", ins_id);
    f.append("date", date);

    // Loop through each row in the table
    for (var i = 1; i < rows.length; i++) {
        var checkbox = rows[i].getElementsByTagName("input")[0];

        // console.log(checkbox);

        // Check if the checkbox is checked or not
        if (checkbox.checked) {
            var nt_id = rows[i].getElementsByTagName("td")[2];

            // console.log(nt_id.innerHTML);

            f.append("nt_id" + i, nt_id.innerHTML);

        }

    }

    r.open("POST", "inspectorSelectedToMonitoringprocess.php", true);
    r.send(f);
}

function AdeselctSTchck() {

    // Get a reference to the "Select All" checkbox
    var selectAllCheckbox = document.getElementById("mainCheckbox1");

    // Add a click event listener to the "Select All" checkbox
    //  selectAllCheckbox.addEventListener("click", function () {
    console.log("clicked");
    // Get a reference to all the checkboxes in the table
    var checkboxes = document.querySelectorAll("table tbody input[type='checkbox']");

    // console.log(checkboxes);
    // Loop through each checkbox
    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = selectAllCheckbox.checked;
    }
}

////////////////////////////////////////////////////////////////////////////////////////////////////////

function InsselctSTtomonit(st_id, row, ins_id, monit_stat) {
    var mtd = document.getElementById("monitoring_date");
    document.getElementById("row" + row).style.backgroundColor = "#ff8c5f67";

    mtd.classList = '';
    mtd.classList.add('form-control');

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (this.readyState == 4) {
            var t = r.responseText;

            console.log(t);
            if (t == "Please select monitoring date") {
                alert("Please select monitoring date");
                mtd.classList = '';
                mtd.classList.add('form-control');
                mtd.classList.add('rotate-border');
                mtd.addEventListener('click', function () {
                    mtd.classList = '';
                    mtd.classList.add('form-control');
                })
            } else {
                mtd.classList = '';
                mtd.classList.add('form-control');
            }

            searchmonitorInspect();

        }
    }

    var f = new FormData();
    f.append("st_id", st_id);
    f.append("mtd", mtd.value);
    f.append("ins_id", ins_id);
    f.append("monit_stat", monit_stat);

    r.open("POST", "InsselctSTtomonit.php", true);
    r.send(f);
}

//----------------------------------------------------------------------------------------------------------------------------

function monitoredByInspector(nt_id) {

    var chk;

    const checkboxes = document.querySelectorAll('input[type="checkbox"][id^="Present_"]');
    checkboxes.forEach(function (checkbox) {
        // Access and manipulate each "Present" checkbox
        // console.log(checkbox.checked);
        chk = checkbox.checked;
    });

    // console.log(chk);

    var r = new XMLHttpRequest();
    //  console.log(r.readyState);
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            console.log(r.responseText);

            // location.reload();
        }
    }

    var f = new FormData();
    f.append("nt_id", nt_id);
    f.append("checkbox", chk);
    r.open('POST', 'monitoringProcess.php', true);
    r.send(f);

}


function approveMonitoredStudents(ins_id) {
    var mp = document.getElementById('sampr');
    console.log(mp.value + " " + ins_id);
    var r = new XMLHttpRequest();
    //  console.log(r.readyState);
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            console.log(r.responseText);
            if (r.responseText == "Please Select Monitoring Phase") {
                alert("Please Select Monitoring Phase");
            }
            // location.reload();
        }
    }

    var f = new FormData();
    f.append("ins_id", ins_id);
    f.append("monit_phase", mp.value);
    r.open('POST', 'checkedMonitoredStudens.php', true);
    r.send(f);
}


//=================================================================================
//-----student----------
//=====================================================================================

function stmUni(uniID) {
    // alert(uniID);
    var stmBody = document.getElementById("stmBody");
    var unimBody = document.getElementById("unimBody");

    var f = new FormData();
    f.append("uniID", uniID);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (this.readyState == 4) {
            var t = r.responseText;

            // alert(t);

            unimBody.style.display = "none";
            stmBody.style.display = "block";
            stmBody.innerHTML = t;
        }
    }

    r.open("POST", "st_batch.php", true);
    r.send(f);

}

function std_Back_to_uni() {
    document.getElementById("stmBody").style.display = 'none';
    document.getElementById("unimBody").style.display = 'block';
}

function stmdegrr(year, uni) {

    var stmBody = document.getElementById("stmBody");
    var degBody = document.getElementById("degBody");

    var f = new FormData();
    f.append("yr", year);
    f.append("uni", uni);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (this.readyState == 4) {
            var t = r.responseText;

            stmBody.style.display = "none";
            degBody.style.display = "block";
            degBody.innerHTML = t;
        }
    }
    r.open("POST", "st_degree.php", true);
    r.send(f);
}

function std_Back_to_batch() {
    document.getElementById("degBody").style.display = 'none';
    document.getElementById("stmBody").style.display = 'block';
}

function stmfield(uni, deg, yr) {
    //  alert(uni + deg + yr);

    var fieldBody = document.getElementById("fieldBody");
    var degBody = document.getElementById("degBody");

    var f = new FormData();
    f.append("yr", yr);
    f.append("uni", uni);
    f.append("deg", deg);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (this.readyState == 4) {
            var t = r.responseText;

            // alert(t);

            degBody.style.display = "none";
            fieldBody.style.display = "block";
            fieldBody.innerHTML = t;
        }
    }

    r.open("POST", "st_field.php", true);
    r.send(f);
}


function std_Back_to_degree() {
    document.getElementById("fieldBody").style.display = 'none';
    document.getElementById("degBody").style.display = 'block';
}

function stmstudent(uni, deg, yr, field) {

    var fieldBody = document.getElementById("fieldBody");
    var selctBody = document.getElementById("selctBody");

    var f = new FormData();
    f.append("yr", yr);
    f.append("uni", uni);
    f.append("deg", deg);
    f.append("field", field);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (this.readyState == 4) {
            var t = r.responseText;

            fieldBody.style.display = "none";
            selctBody.style.display = "block";
            selctBody.innerHTML = t;
        }
    }

    r.open("POST", "st_select.php", true);
    r.send(f);

}

function std_Back_to_field() {
    document.getElementById("selctBody").style.display = 'none';
    document.getElementById("fieldBody").style.display = 'block';
}


function Student_profile_admin(st_id) {

    var stprofBody = document.getElementById("stprofBody");
    var selctBody = document.getElementById("selctBody");

    var f = new FormData();
    f.append("x", st_id);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (this.readyState == 4) {
            var t = r.responseText;

            stprofBody.innerHTML = t;
            selctBody.style.display = 'none';
            stprofBody.style.display = 'block';
        }
    }

    r.open("POST", "st_profile.php", true);
    r.send(f);

}

function std_Back_to_select_admin() {
    document.getElementById("stprofBody").style.display = 'none';
    document.getElementById("selctBody").style.display = 'block';
}

function student_reg() {
    var ad_st_main_SM = document.getElementById("ad_st_main_SM");
    var ad_st_FName = document.getElementById("ad_st_FName");
    var ad_st_FName_SM = document.getElementById("ad_st_FName_SM");
    var ad_st_LName = document.getElementById("ad_st_LName");
    var ad_st_LName_SM = document.getElementById("ad_st_LName_SM");
    var ad_st_FullName = document.getElementById("ad_st_FullName");
    var ad_st_FullName_SM = document.getElementById("ad_st_FullName_SM");
    var ad_st_FullNameInit = document.getElementById("ad_st_FullNameInit");
    var ad_st_FullNameInit_SM = document.getElementById("ad_st_FullNameInit_SM");
    var ad_st_Address = document.getElementById("ad_st_Address");
    var ad_st_Address_SM = document.getElementById("ad_st_Address_SM");
    var ad_st_Gender = document.getElementById("ad_st_Gender");
    var ad_st_Gender_SM = document.getElementById("ad_st_Gender_SM");
    var ad_st_NIC = document.getElementById("ad_st_NIC");
    var ad_st_NIC_SM = document.getElementById("ad_st_NIC_SM");
    var ad_st_Mobile = document.getElementById("ad_st_Mobile");
    var ad_st_Mobile_SM = document.getElementById("ad_st_Mobile_SM");
    var ad_st_Landline = document.getElementById("ad_st_Landline");
    var ad_st_Landline_SM = document.getElementById("ad_st_Landline_SM");
    var ad_st_Email = document.getElementById("ad_st_Email");
    var ad_st_Email_SM = document.getElementById("ad_st_Email_SM");
    var ad_st_Uni = document.getElementById("ad_st_Uni");
    var ad_st_Uni_SM = document.getElementById("ad_st_Uni_SM");
    var ad_st_Degree = document.getElementById("ad_st_Degree");
    var ad_st_Degree_SM = document.getElementById("ad_st_Degree_SM");
    var ad_st_Field = document.getElementById("ad_st_Field");
    var ad_st_Field_SM = document.getElementById("ad_st_Field_SM");
    var ad_st_Pass = document.getElementById("ad_st_Pass");
    var ad_st_Pass_SM = document.getElementById("ad_st_Pass_SM");

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var text = r.responseText
            console.log(text);
            if (text == 'Place enter first name') {
                ad_st_FName_SM.innerHTML = text;
                ad_st_main_SM.style.display = 'none ';
                ad_st_FName_SM.style.display = 'block';
                ad_st_LName_SM.style.display = 'none';
                ad_st_FullName_SM.style.display = 'none';
                ad_st_FullNameInit_SM.style.display = 'none';
                ad_st_Address_SM.style.display = 'none';
                ad_st_Gender_SM.style.display = 'none';
                ad_st_NIC_SM.style.display = 'none';
                ad_st_Mobile_SM.style.display = 'none';
                ad_st_Landline_SM.style.display = 'none';
                ad_st_Email_SM.style.display = 'none';
                ad_st_Uni_SM.style.display = 'none';
                ad_st_Degree_SM.style.display = 'none';
                ad_st_Field_SM.style.display = 'none';
                ad_st_Pass_SM.style.display = 'none';
            } else if (text == 'Please enter last name') {
                ad_st_LName_SM.innerHTML = text;
                ad_st_main_SM.style.display = 'none ';
                ad_st_FName_SM.style.display = 'none';
                ad_st_LName_SM.style.display = 'block';
                ad_st_FullName_SM.style.display = 'none';
                ad_st_FullNameInit_SM.style.display = 'none';
                ad_st_Address_SM.style.display = 'none';
                ad_st_Gender_SM.style.display = 'none';
                ad_st_NIC_SM.style.display = 'none';
                ad_st_Mobile_SM.style.display = 'none';
                ad_st_Landline_SM.style.display = 'none';
                ad_st_Email_SM.style.display = 'none';
                ad_st_Uni_SM.style.display = 'none';
                ad_st_Degree_SM.style.display = 'none';
                ad_st_Field_SM.style.display = 'none';
                ad_st_Pass_SM.style.display = 'none';
            } else if (text == 'Please enter full name') {
                ad_st_FullName_SM.innerHTML = text;
                ad_st_main_SM.style.display = 'none ';
                ad_st_FName_SM.style.display = 'none';
                ad_st_LName_SM.style.display = 'none';
                ad_st_FullName_SM.style.display = 'block';
                ad_st_FullNameInit_SM.style.display = 'none';
                ad_st_Address_SM.style.display = 'none';
                ad_st_Gender_SM.style.display = 'none';
                ad_st_NIC_SM.style.display = 'none';
                ad_st_Mobile_SM.style.display = 'none';
                ad_st_Landline_SM.style.display = 'none';
                ad_st_Email_SM.style.display = 'none';
                ad_st_Uni_SM.style.display = 'none';
                ad_st_Degree_SM.style.display = 'none';
                ad_st_Field_SM.style.display = 'none';
                ad_st_Pass_SM.style.display = 'none';
            } else if (text == 'Please enter full name with initials') {
                ad_st_FullNameInit_SM.innerHTML = text;
                ad_st_main_SM.style.display = 'none ';
                ad_st_FName_SM.style.display = 'none';
                ad_st_LName_SM.style.display = 'none';
                ad_st_FullName_SM.style.display = 'none';
                ad_st_FullNameInit_SM.style.display = 'block';
                ad_st_Address_SM.style.display = 'none';
                ad_st_Gender_SM.style.display = 'none';
                ad_st_NIC_SM.style.display = 'none';
                ad_st_Mobile_SM.style.display = 'none';
                ad_st_Landline_SM.style.display = 'none';
                ad_st_Email_SM.style.display = 'none';
                ad_st_Uni_SM.style.display = 'none';
                ad_st_Degree_SM.style.display = 'none';
                ad_st_Field_SM.style.display = 'none';
                ad_st_Pass_SM.style.display = 'none';
            } else if (text == 'Place enter address') {
                ad_st_Address_SM.innerHTML = text;
                ad_st_main_SM.style.display = 'none ';
                ad_st_FName_SM.style.display = 'none';
                ad_st_LName_SM.style.display = 'none';
                ad_st_FullName_SM.style.display = 'none';
                ad_st_FullNameInit_SM.style.display = 'none';
                ad_st_Address_SM.style.display = 'block';
                ad_st_Gender_SM.style.display = 'none';
                ad_st_NIC_SM.style.display = 'none';
                ad_st_Mobile_SM.style.display = 'none';
                ad_st_Landline_SM.style.display = 'none';
                ad_st_Email_SM.style.display = 'none';
                ad_st_Uni_SM.style.display = 'none';
                ad_st_Degree_SM.style.display = 'none';
                ad_st_Field_SM.style.display = 'none';
                ad_st_Pass_SM.style.display = 'none';
            } else if (text == 'Please select gender') {
                ad_st_Gender_SM.innerHTML = text;
                ad_st_main_SM.style.display = 'none ';
                ad_st_FName_SM.style.display = 'none';
                ad_st_LName_SM.style.display = 'none';
                ad_st_FullName_SM.style.display = 'none';
                ad_st_FullNameInit_SM.style.display = 'none';
                ad_st_Address_SM.style.display = 'none';
                ad_st_Gender_SM.style.display = 'block';
                ad_st_NIC_SM.style.display = 'none';
                ad_st_Mobile_SM.style.display = 'none';
                ad_st_Landline_SM.style.display = 'none';
                ad_st_Email_SM.style.display = 'none';
                ad_st_Uni_SM.style.display = 'none';
                ad_st_Degree_SM.style.display = 'none';
                ad_st_Field_SM.style.display = 'none';
                ad_st_Pass_SM.style.display = 'none';
            } else if (text == 'Please enter NIC No') {
                ad_st_NIC_SM.innerHTML = text;
                ad_st_main_SM.style.display = 'none ';
                ad_st_FName_SM.style.display = 'none';
                ad_st_LName_SM.style.display = 'none';
                ad_st_FullName_SM.style.display = 'none';
                ad_st_FullNameInit_SM.style.display = 'none';
                ad_st_Address_SM.style.display = 'none';
                ad_st_Gender_SM.style.display = 'none';
                ad_st_NIC_SM.style.display = 'block';
                ad_st_Mobile_SM.style.display = 'none';
                ad_st_Landline_SM.style.display = 'none';
                ad_st_Email_SM.style.display = 'none';
                ad_st_Uni_SM.style.display = 'none';
                ad_st_Degree_SM.style.display = 'none';
                ad_st_Field_SM.style.display = 'none';
                ad_st_Pass_SM.style.display = 'none';
            } else if (text == 'Please enter mobile number') {
                ad_st_Mobile_SM.innerHTML = text;
                ad_st_main_SM.style.display = 'none ';
                ad_st_FName_SM.style.display = 'none';
                ad_st_LName_SM.style.display = 'none';
                ad_st_FullName_SM.style.display = 'none';
                ad_st_FullNameInit_SM.style.display = 'none';
                ad_st_Address_SM.style.display = 'none';
                ad_st_Gender_SM.style.display = 'none';
                ad_st_NIC_SM.style.display = 'none';
                ad_st_Mobile_SM.style.display = 'block';
                ad_st_Landline_SM.style.display = 'none';
                ad_st_Email_SM.style.display = 'none';
                ad_st_Uni_SM.style.display = 'none';
                ad_st_Degree_SM.style.display = 'none';
                ad_st_Field_SM.style.display = 'none';
                ad_st_Pass_SM.style.display = 'none';
            } else if (text == 'Please enter land line number') {
                ad_st_Landline_SM.innerHTML = text;
                ad_st_main_SM.style.display = 'none ';
                ad_st_FName_SM.style.display = 'none';
                ad_st_LName_SM.style.display = 'none';
                ad_st_FullName_SM.style.display = 'none';
                ad_st_FullNameInit_SM.style.display = 'none';
                ad_st_Address_SM.style.display = 'none';
                ad_st_Gender_SM.style.display = 'none';
                ad_st_NIC_SM.style.display = 'none';
                ad_st_Mobile_SM.style.display = 'none';
                ad_st_Landline_SM.style.display = 'block';
                ad_st_Email_SM.style.display = 'none';
                ad_st_Uni_SM.style.display = 'none';
                ad_st_Degree_SM.style.display = 'none';
                ad_st_Field_SM.style.display = 'none';
                ad_st_Pass_SM.style.display = 'none';
            } else if (text == 'Please enter email') {
                ad_st_Email_SM.innerHTML = text;
                ad_st_main_SM.style.display = 'none ';
                ad_st_FName_SM.style.display = 'none';
                ad_st_LName_SM.style.display = 'none';
                ad_st_FullName_SM.style.display = 'none';
                ad_st_FullNameInit_SM.style.display = 'none';
                ad_st_Address_SM.style.display = 'none';
                ad_st_Gender_SM.style.display = 'none';
                ad_st_NIC_SM.style.display = 'none';
                ad_st_Mobile_SM.style.display = 'none';
                ad_st_Landline_SM.style.display = 'none';
                ad_st_Email_SM.style.display = 'block';
                ad_st_Uni_SM.style.display = 'none';
                ad_st_Degree_SM.style.display = 'none';
                ad_st_Field_SM.style.display = 'none';
                ad_st_Pass_SM.style.display = 'none';
            } else if (text == 'Please select university or institute') {
                ad_st_Uni_SM.innerHTML = text;
                ad_st_main_SM.style.display = 'none ';
                ad_st_FName_SM.style.display = 'none';
                ad_st_LName_SM.style.display = 'none';
                ad_st_FullName_SM.style.display = 'none';
                ad_st_FullNameInit_SM.style.display = 'none';
                ad_st_Address_SM.style.display = 'none';
                ad_st_Gender_SM.style.display = 'none';
                ad_st_NIC_SM.style.display = 'none';
                ad_st_Mobile_SM.style.display = 'none';
                ad_st_Landline_SM.style.display = 'none';
                ad_st_Email_SM.style.display = 'none';
                ad_st_Uni_SM.style.display = 'block';
                ad_st_Degree_SM.style.display = 'none';
                ad_st_Field_SM.style.display = 'none';
                ad_st_Pass_SM.style.display = 'none';
            } else if (text == 'Please select degree') {
                ad_st_Degree_SM.innerHTML = text;
                ad_st_main_SM.style.display = 'none ';
                ad_st_FName_SM.style.display = 'none';
                ad_st_LName_SM.style.display = 'none';
                ad_st_FullName_SM.style.display = 'none';
                ad_st_FullNameInit_SM.style.display = 'none';
                ad_st_Address_SM.style.display = 'none';
                ad_st_Gender_SM.style.display = 'none';
                ad_st_NIC_SM.style.display = 'none';
                ad_st_Mobile_SM.style.display = 'none';
                ad_st_Landline_SM.style.display = 'none';
                ad_st_Email_SM.style.display = 'none';
                ad_st_Uni_SM.style.display = 'none';
                ad_st_Degree_SM.style.display = 'block';
                ad_st_Field_SM.style.display = 'none';
                ad_st_Pass_SM.style.display = 'none';
            } else if (text == 'Please select field') {
                ad_st_Field_SM.innerHTML = text;
                ad_st_main_SM.style.display = 'none ';
                ad_st_FName_SM.style.display = 'none';
                ad_st_LName_SM.style.display = 'none';
                ad_st_FullName_SM.style.display = 'none';
                ad_st_FullNameInit_SM.style.display = 'none';
                ad_st_Address_SM.style.display = 'none';
                ad_st_Gender_SM.style.display = 'none';
                ad_st_NIC_SM.style.display = 'none';
                ad_st_Mobile_SM.style.display = 'none';
                ad_st_Landline_SM.style.display = 'none';
                ad_st_Email_SM.style.display = 'none';
                ad_st_Uni_SM.style.display = 'none';
                ad_st_Degree_SM.style.display = 'none';
                ad_st_Field_SM.style.display = 'block';
                ad_st_Pass_SM.style.display = 'none';
            } else if (text == 'Please enter password') {
                ad_st_Pass_SM.innerHTML = text;
                ad_st_main_SM.style.display = 'none ';
                ad_st_FName_SM.style.display = 'none';
                ad_st_LName_SM.style.display = 'none';
                ad_st_FullName_SM.style.display = 'none';
                ad_st_FullNameInit_SM.style.display = 'none';
                ad_st_Address_SM.style.display = 'none';
                ad_st_Gender_SM.style.display = 'none';
                ad_st_NIC_SM.style.display = 'none';
                ad_st_Mobile_SM.style.display = 'none';
                ad_st_Landline_SM.style.display = 'none';
                ad_st_Email_SM.style.display = 'none';
                ad_st_Uni_SM.style.display = 'none';
                ad_st_Degree_SM.style.display = 'none';
                ad_st_Field_SM.style.display = 'none';
                ad_st_Pass_SM.style.display = 'block';
            } else {

                if (text == 'success') {
                    ad_st_main_SM.innerHTML = text;
                    ad_st_main_SM.style.display = 'block';
                    ad_st_FName_SM.style.display = 'none';
                    ad_st_LName_SM.style.display = 'none';
                    ad_st_FullName_SM.style.display = 'none';
                    ad_st_FullNameInit_SM.style.display = 'none';
                    ad_st_Address_SM.style.display = 'none';
                    ad_st_Gender_SM.style.display = 'none';
                    ad_st_NIC_SM.style.display = 'none';
                    ad_st_Mobile_SM.style.display = 'none';
                    ad_st_Landline_SM.style.display = 'none';
                    ad_st_Email_SM.style.display = 'none';
                    ad_st_Uni_SM.style.display = 'none';
                    ad_st_Degree_SM.style.display = 'none';
                    ad_st_Field_SM.style.display = 'none';
                    ad_st_Pass_SM.style.display = 'none';
                    location.reload();
                } else {
                    ad_st_main_SM.innerHTML = text;
                    ad_st_main_SM.style.display = 'block';
                    ad_st_FName_SM.style.display = 'none';
                    ad_st_LName_SM.style.display = 'none';
                    ad_st_FullName_SM.style.display = 'none';
                    ad_st_FullNameInit_SM.style.display = 'none';
                    ad_st_Address_SM.style.display = 'none';
                    ad_st_Gender_SM.style.display = 'none';
                    ad_st_NIC_SM.style.display = 'none';
                    ad_st_Mobile_SM.style.display = 'none';
                    ad_st_Landline_SM.style.display = 'none';
                    ad_st_Email_SM.style.display = 'none';
                    ad_st_Uni_SM.style.display = 'none';
                    ad_st_Degree_SM.style.display = 'none';
                    ad_st_Field_SM.style.display = 'none';
                    ad_st_Pass_SM.style.display = 'none';
                }
            }
        }
    }

    var f = new FormData();
    f.append("ad_st_FName", ad_st_FName.value);
    f.append("ad_st_LName", ad_st_LName.value);
    f.append("ad_st_FullName", ad_st_FullName.value);
    f.append("ad_st_FullNameInit", ad_st_FullNameInit.value);
    f.append("ad_st_Address", ad_st_Address.value);
    f.append("ad_st_Gender", ad_st_Gender.value);
    f.append("ad_st_NIC", ad_st_NIC.value);
    f.append("ad_st_Mobile", ad_st_Mobile.value);
    f.append("ad_st_Landline", ad_st_Landline.value);
    f.append("ad_st_Email", ad_st_Email.value);
    f.append("ad_st_Uni", ad_st_Uni.value);
    f.append("ad_st_Degree", ad_st_Degree.value);
    f.append("ad_st_Field", ad_st_Field.value);
    f.append("ad_st_Pass", ad_st_Pass.value);

    r.open("POST", "student_register_process_admin.php", true);
    r.send(f);

}


//=========================================================================================================================
//-----Contract form upload 
//==========================================================================================================================
function selctcontract() {

    var view = document.getElementById("viewM"); //view tag
    var file = document.getElementById("addcontract"); //file chooser

    file.onchange = function () {

        var file1 = this.files[0];
        var url1 = window.URL.createObjectURL(file1);
        view.innerHTML = url1;

    }

}

function upload_contract() {

    var file = document.getElementById("addcontract");
    var form = new FormData();
    if (file.files.length == 0) {

        alert("Pleace Select the Contract Form to upload");

    } else {

        form.append("file", file.files[0]);

    }

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t != "") {
                alert(t);
                location.reload();
            }

        }
    }

    r.open("POST", "contract_upload.php", true);
    r.send(form);

}

//=========================================================================================================================
//------------ University 
//=========================================================================================================================

function admin_uni(uni_id) {

    var admin_university_list = document.getElementById("admin_university_list");
    var admin_university_prof = document.getElementById("admin_university_prof");

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (this.readyState == 4) {
            var t = r.responseText;

            admin_university_prof.innerHTML = t;
            admin_university_prof.style.display = "block";
            admin_university_list.style.display = "none";

        }
    }

    var f = new FormData();
    f.append("uni_id", uni_id);
    r.open("POST", "individual_University.php", true);
    r.send(f);

}

function admin_indi_uni() {
    document.getElementById("admin_university_prof").style.display = 'none';
    document.getElementById("admin_university_list").style.display = 'block';
}

function admin_add_other_degree(elm) {
    console.log(elm.value);
    var admin_add_degree_other_deg = document.getElementById("admin_add_degree_other_deg");

    if (elm.value == "y") {
        admin_add_degree_other_deg.style.display='block';
    } else {
        admin_add_degree_other_deg.style.display = 'none';
    }
}

//=========================================================================================================================
//------------ Assessment  
//=========================================================================================================================

function select_students_to_assessment() {
    console.log('select_students_to_assessment');
    var createassesmnt_uni = document.getElementById('createassesmnt_uni');
    var createassesmnt_batch = document.getElementById('createassesmnt_batch');
    var createassesmnt_field = document.getElementById('createassesmnt_field');
    var createassesmnt_degre = document.getElementById('createassesmnt_degre');
    var createassesmnt_date = document.getElementById('createassesmnt_date');
    var createassesmnt_table = document.getElementById('createassesmnt_table');
    var createassesmnt_button = document.getElementById('createassesmnt_button');

    var f = new FormData();
    f.append('createassesmnt_uni', createassesmnt_uni.value);
    f.append('createassesmnt_batch', createassesmnt_batch.value);
    f.append('createassesmnt_field', createassesmnt_field.value);
    f.append('createassesmnt_degre', createassesmnt_degre.value);
    f.append('createassesmnt_date', createassesmnt_date.value);


    if (createassesmnt_uni.value != 'x') {
        createassesmnt_batch.removeAttribute('disabled');
    } else {
        createassesmnt_batch.setAttribute('disabled', true);
    }
    if (createassesmnt_batch.value != 'x') {
        createassesmnt_field.removeAttribute('disabled');
    } else {
        createassesmnt_field.setAttribute('disabled', true);
    }
    if (createassesmnt_field.value != 'x') {
        createassesmnt_degre.removeAttribute('disabled');
    } else {
        createassesmnt_degre.setAttribute('disabled', true);
    }

    if (createassesmnt_degre.value != 'x') {
        createassesmnt_button.removeAttribute('disabled');
        var r = new XMLHttpRequest();
        r.onreadystatechange = function () {
            if (this.readyState == 4) {
                var t = r.responseText;
                console.log(t);
                createassesmnt_table.innerHTML = t;
            }
        }
        r.open("POST", "create_assessment_table.php", true);
        r.send(f);
    } else {
        createassesmnt_button.setAttribute('disabled', true);
    }
}





























