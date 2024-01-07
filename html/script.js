function admin_load() {
    admin_assessment_sort();
    admin_all_students_data();
    admin_all_full_students_data();
    pg_admin_all_students_data(1);
    pg_admin_all_full_students_data(1);
    pg_admin_all_training_places(1);
}

//====================================================================================================================================
//-------------------------STUDENT FUNCTIONS-------------------------------------------------------------------------------------------
//====================================================================================================================================

function st_dashboard() {
    document.getElementById('st_dashboard').style.display = 'block';
    document.getElementById('st_my_details').style.display = 'none';
}

function st_my_details() {
    document.getElementById('st_dashboard').style.display = 'none';
    document.getElementById('st_my_details').style.display = 'block';
}

function student_prfile_update(st_id) {
    console.log('student_prfile_update');
    let st_prof_first_name = document.getElementById('st_prof_first_name');
    let st_prof_last_name = document.getElementById('st_prof_last_name');
    let st_prof_full_name_with_init = document.getElementById('st_prof_full_name_with_init');
    let st_prof_full_name = document.getElementById('st_prof_full_name');
    let st_prof_address = document.getElementById('st_prof_address');


    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (this.readyState == 4) {
            var t = r.responseText;
            console.log(t);
            if (t == 'success') {
                location.reload();
            }
        }
    }

    var f = new FormData();
    f.append("st_id", st_id);
    f.append("st_prof_first_name", st_prof_first_name.value);
    f.append("st_prof_last_name", st_prof_last_name.value);
    f.append("st_prof_full_name_with_init", st_prof_full_name_with_init.value);
    f.append("st_prof_full_name", st_prof_full_name.value);
    f.append("st_prof_address", st_prof_address.value);

    r.open("POST", "student_prfile_update_proccess.php", true);
    r.send(f);
}

//====================================================================================================================================
//-------------------------ADIMIN FUNCTIONS-------------------------------------------------------------------------------------------
//====================================================================================================================================

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
            console.log(t);
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
            } else if (t == "1") {
                unameSM.style.display = "none";
                passSM.style.display = "none";
                loginSM.innerHTML = t;
                loginSM.style.display = "block";
                window.location = "admin.php";
            } else if (t == "2") {
                unameSM.style.display = "none";
                passSM.style.display = "none";
                loginSM.innerHTML = t;
                loginSM.style.display = "block";
                window.location = "student_account.php";
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

    console.log('rows.length ' + rows.length);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var text = r.responseText;
            console.log(text);
            if (text == 'success') {
                alert(text);
                window.location.reload();
            }

        }
    }

    var f = new FormData();
    f.append("st_count", rows.length);
    f.append("ins_id", ins_id);
    f.append("date", date);

    // Loop through each row in the table
    for (var i = 1; i < rows.length; i++) {
        var checkbox = rows[i].getElementsByTagName("input")[0];

        console.log('checkbox ' + checkbox);

        // Check if the checkbox is checked or not
        if (checkbox.checked) {
            var nt_id = rows[i].getElementsByTagName("td")[2];

            console.log('nt_id.innerHTML ' + nt_id.innerHTML);

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

            unimBody.style.display = "none";
            stmBody.style.display = "block";
            stmBody.innerHTML = t;
            pg_admin_student_batch(1, uniID);
        }
    }

    r.open("POST", "st_batch.php", true);
    r.send(f);
}

function pg_admin_student_batch(pg, uniID) {
    console.log('pg_admin_student_batch');
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            // console.log(r.responseText);
            console.log(uniID);
            document.getElementById('pg_admin_student_batch').innerHTML = r.responseText;
        }
    }
    r.open("GET", "pg_admin_student_batch_process.php?pg=" + pg + "&uniID=" + uniID, true);
    r.send();
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
            pg_admin_student_degree(1, uni, year);
        }
    }
    r.open("POST", "st_degree.php", true);
    r.send(f);
}

function pg_admin_student_degree(pg, uniID, year) {
    console.log('pg_admin_student_batch');
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            // console.log(r.responseText);
            console.log(uniID);
            document.getElementById('pg_admin_student_degree').innerHTML = r.responseText;
        }
    }
    r.open("GET", "pg_admin_student_degree_process.php?pg=" + pg + "&uni=" + uniID + "&yr=" + year, true);
    r.send();
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

            degBody.style.display = "none";
            fieldBody.style.display = "block";
            fieldBody.innerHTML = t;
            pg_admin_student_field(1, uni, deg, yr);
        }
    }

    r.open("POST", "st_field.php", true);
    r.send(f);
}

function pg_admin_student_field(pg, uni, deg, year) {
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            // console.log(r.responseText);
            document.getElementById('pg_admin_student_field').innerHTML = r.responseText;
        }
    }
    r.open("GET", "pg_admin_student_field_process.php?pg=" + pg + "&uni=" + uni + "&deg=" + deg + "&yr=" + year, true);
    r.send();
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
            pg_admin_student_select(1, uni, deg, yr, field)
        }
    }

    r.open("POST", "st_select.php", true);
    r.send(f);

}

function pg_admin_student_select(pg, uni, deg, year, field) {
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            // console.log(r.responseText);
            document.getElementById('pg_admin_student_select').innerHTML = r.responseText;
        }
    }
    r.open("GET", "pg_admin_student_select_process.php?pg=" + pg + "&uni=" + uni + "&deg=" + deg + "&yr=" + year + "&field=" + field, true);
    r.send();
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

function admin_student_reg() {
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
                ad_st_main_SM.innerHTML = text;
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
                ad_st_main_SM.innerHTML = text;
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
                ad_st_main_SM.innerHTML = text;
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
                ad_st_main_SM.innerHTML = text;
                ad_st_FullNameInit_SM.innerHTML = text;
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
                ad_st_main_SM.innerHTML = text;
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
                ad_st_main_SM.innerHTML = text;
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
                ad_st_main_SM.innerHTML = text;
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
                ad_st_main_SM.innerHTML = text;
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
                ad_st_main_SM.innerHTML = text;
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
                ad_st_main_SM.innerHTML = text;
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
                ad_st_main_SM.innerHTML = text;
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
                ad_st_main_SM.innerHTML = text;
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
                ad_st_main_SM.innerHTML = text;
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
                ad_st_main_SM.innerHTML = text;
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

function student_reg() {
    var st_st_main_SM = document.getElementById("st_st_main_SM");
    var st_st_FName = document.getElementById("st_st_FName");
    var st_st_FName_SM = document.getElementById("st_st_FName_SM");
    var st_st_LName = document.getElementById("st_st_LName");
    var st_st_LName_SM = document.getElementById("st_st_LName_SM");
    var st_st_FullName = document.getElementById("st_st_FullName");
    var st_st_FullName_SM = document.getElementById("st_st_FullName_SM");
    var st_st_FullNameInit = document.getElementById("st_st_FullNameInit");
    var st_st_FullNameInit_SM = document.getElementById("st_st_FullNameInit_SM");
    var st_st_Address = document.getElementById("st_st_Address");
    var st_st_Address_SM = document.getElementById("st_st_Address_SM");
    var st_st_Gender = document.getElementById("st_st_Gender");
    var st_st_Gender_SM = document.getElementById("st_st_Gender_SM");
    var st_st_NIC = document.getElementById("st_st_NIC");
    var st_st_NIC_SM = document.getElementById("st_st_NIC_SM");
    var st_st_Mobile = document.getElementById("st_st_Mobile");
    var st_st_Mobile_SM = document.getElementById("st_st_Mobile_SM");
    var st_st_Landline = document.getElementById("st_st_Landline");
    var st_st_Landline_SM = document.getElementById("st_st_Landline_SM");
    var st_st_Email = document.getElementById("st_st_Email");
    var st_st_Email_SM = document.getElementById("st_st_Email_SM");
    var st_st_Uni = document.getElementById("st_st_Uni");
    var st_st_Uni_SM = document.getElementById("st_st_Uni_SM");
    var st_st_Degree = document.getElementById("st_st_Degree");
    var st_st_Degree_SM = document.getElementById("st_st_Degree_SM");
    var st_st_Field = document.getElementById("st_st_Field");
    var st_st_Field_SM = document.getElementById("st_st_Field_SM");
    var st_st_Pass = document.getElementById("st_st_Pass");
    var st_st_Pass_SM = document.getElementById("st_st_Pass_SM");
    var st_st_Pass_confrm = document.getElementById("st_st_Pass_confrm");
    var st_st_Pass_confrm_SM = document.getElementById("st_st_Pass_confrm_SM");

    var st_st_form = document.getElementById("st_st_form");
    var st_st_form_success = document.getElementById("st_st_form_success");

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var text = r.responseText
            console.log(text);
            if (text == 'Place enter first name') {
                st_st_FName_SM.innerHTML = text;
                st_st_main_SM.style.display = 'none ';
                st_st_FName_SM.style.display = 'block';
                st_st_LName_SM.style.display = 'none';
                st_st_FullName_SM.style.display = 'none';
                st_st_FullNameInit_SM.style.display = 'none';
                st_st_Address_SM.style.display = 'none';
                st_st_Gender_SM.style.display = 'none';
                st_st_NIC_SM.style.display = 'none';
                st_st_Mobile_SM.style.display = 'none';
                st_st_Landline_SM.style.display = 'none';
                st_st_Email_SM.style.display = 'none';
                st_st_Uni_SM.style.display = 'none';
                st_st_Degree_SM.style.display = 'none';
                st_st_Field_SM.style.display = 'none';
                st_st_Pass_SM.style.display = 'none';
                st_st_Pass_confrm_SM.style.display = 'none';
            } else if (text == 'Please enter last name') {
                st_st_FName_SM.innerHTML = text;
                st_st_main_SM.style.display = 'none ';
                st_st_FName_SM.style.display = 'none';
                st_st_LName_SM.innerHTML = text;
                st_st_LName_SM.style.display = 'block';
                st_st_FullName_SM.style.display = 'none';
                st_st_FullNameInit_SM.style.display = 'none';
                st_st_Address_SM.style.display = 'none';
                st_st_Gender_SM.style.display = 'none';
                st_st_NIC_SM.style.display = 'none';
                st_st_Mobile_SM.style.display = 'none';
                st_st_Landline_SM.style.display = 'none';
                st_st_Email_SM.style.display = 'none';
                st_st_Uni_SM.style.display = 'none';
                st_st_Degree_SM.style.display = 'none';
                st_st_Field_SM.style.display = 'none';
                st_st_Pass_SM.style.display = 'none';
                st_st_Pass_confrm_SM.style.display = 'none';
            } else if (text == 'Please enter full name') {
                st_st_FName_SM.innerHTML = text;
                st_st_main_SM.style.display = 'none ';
                st_st_FName_SM.style.display = 'none';
                st_st_LName_SM.style.display = 'none';
                st_st_FullName_SM.innerHTML = text;
                st_st_FullName_SM.style.display = 'block';
                st_st_FullNameInit_SM.style.display = 'none';
                st_st_Address_SM.style.display = 'none';
                st_st_Gender_SM.style.display = 'none';
                st_st_NIC_SM.style.display = 'none';
                st_st_Mobile_SM.style.display = 'none';
                st_st_Landline_SM.style.display = 'none';
                st_st_Email_SM.style.display = 'none';
                st_st_Uni_SM.style.display = 'none';
                st_st_Degree_SM.style.display = 'none';
                st_st_Field_SM.style.display = 'none';
                st_st_Pass_SM.style.display = 'none';
                st_st_Pass_confrm_SM.style.display = 'none';
            } else if (text == 'Please enter full name with initials') {
                st_st_FName_SM.innerHTML = text;
                st_st_main_SM.style.display = 'none ';
                st_st_FName_SM.style.display = 'none';
                st_st_LName_SM.style.display = 'none';
                st_st_FullName_SM.style.display = 'none';
                st_st_FullNameInit_SM.innerHTML = text;
                st_st_FullNameInit_SM.style.display = 'block';
                st_st_Address_SM.style.display = 'none';
                st_st_Gender_SM.style.display = 'none';
                st_st_NIC_SM.style.display = 'none';
                st_st_Mobile_SM.style.display = 'none';
                st_st_Landline_SM.style.display = 'none';
                st_st_Email_SM.style.display = 'none';
                st_st_Uni_SM.style.display = 'none';
                st_st_Degree_SM.style.display = 'none';
                st_st_Field_SM.style.display = 'none';
                st_st_Pass_SM.style.display = 'none';
                st_st_Pass_confrm_SM.style.display = 'none';
            } else if (text == 'Place enter address') {
                st_st_FName_SM.innerHTML = text;
                st_st_main_SM.style.display = 'none ';
                st_st_FName_SM.style.display = 'none';
                st_st_LName_SM.style.display = 'none';
                st_st_FullName_SM.style.display = 'none';
                st_st_FullNameInit_SM.style.display = 'none';
                st_st_Address_SM.innerHTML = text;
                st_st_Address_SM.style.display = 'block';
                st_st_Gender_SM.style.display = 'none';
                st_st_NIC_SM.style.display = 'none';
                st_st_Mobile_SM.style.display = 'none';
                st_st_Landline_SM.style.display = 'none';
                st_st_Email_SM.style.display = 'none';
                st_st_Uni_SM.style.display = 'none';
                st_st_Degree_SM.style.display = 'none';
                st_st_Field_SM.style.display = 'none';
                st_st_Pass_SM.style.display = 'none';
                st_st_Pass_confrm_SM.style.display = 'none';
            } else if (text == 'Please select gender') {
                st_st_FName_SM.innerHTML = text;
                st_st_main_SM.style.display = 'none ';
                st_st_FName_SM.style.display = 'none';
                st_st_LName_SM.style.display = 'none';
                st_st_FullName_SM.style.display = 'none';
                st_st_FullNameInit_SM.style.display = 'none';
                st_st_Address_SM.style.display = 'none';
                st_st_Gender_SM.innerHTML = text;
                st_st_Gender_SM.style.display = 'block';
                st_st_NIC_SM.style.display = 'none';
                st_st_Mobile_SM.style.display = 'none';
                st_st_Landline_SM.style.display = 'none';
                st_st_Email_SM.style.display = 'none';
                st_st_Uni_SM.style.display = 'none';
                st_st_Degree_SM.style.display = 'none';
                st_st_Field_SM.style.display = 'none';
                st_st_Pass_SM.style.display = 'none';
                st_st_Pass_confrm_SM.style.display = 'none';
            } else if (text == 'Please enter NIC No') {
                st_st_FName_SM.innerHTML = text;
                st_st_main_SM.style.display = 'none ';
                st_st_FName_SM.style.display = 'none';
                st_st_LName_SM.style.display = 'none';
                st_st_FullName_SM.style.display = 'none';
                st_st_FullNameInit_SM.style.display = 'none';
                st_st_Address_SM.style.display = 'none';
                st_st_Gender_SM.style.display = 'none';
                st_st_NIC_SM.innerHTML = text;
                st_st_NIC_SM.style.display = 'block';
                st_st_Mobile_SM.style.display = 'none';
                st_st_Landline_SM.style.display = 'none';
                st_st_Email_SM.style.display = 'none';
                st_st_Uni_SM.style.display = 'none';
                st_st_Degree_SM.style.display = 'none';
                st_st_Field_SM.style.display = 'none';
                st_st_Pass_SM.style.display = 'none';
                st_st_Pass_confrm_SM.style.display = 'none';
            } else if (text == 'Please enter mobile number') {
                st_st_FName_SM.innerHTML = text;
                st_st_main_SM.style.display = 'none ';
                st_st_FName_SM.style.display = 'none';
                st_st_LName_SM.style.display = 'none';
                st_st_FullName_SM.style.display = 'none';
                st_st_FullNameInit_SM.style.display = 'none';
                st_st_Address_SM.style.display = 'none';
                st_st_Gender_SM.style.display = 'none';
                st_st_NIC_SM.style.display = 'none';
                st_st_Mobile_SM.innerHTML = text;
                st_st_Mobile_SM.style.display = 'block';
                st_st_Landline_SM.style.display = 'none';
                st_st_Email_SM.style.display = 'none';
                st_st_Uni_SM.style.display = 'none';
                st_st_Degree_SM.style.display = 'none';
                st_st_Field_SM.style.display = 'none';
                st_st_Pass_SM.style.display = 'none';
                st_st_Pass_confrm_SM.style.display = 'none';
            } else if (text == 'Please enter land line number') {
                st_st_FName_SM.innerHTML = text;
                st_st_main_SM.style.display = 'none ';
                st_st_FName_SM.style.display = 'none';
                st_st_LName_SM.style.display = 'none';
                st_st_FullName_SM.style.display = 'none';
                st_st_FullNameInit_SM.style.display = 'none';
                st_st_Address_SM.style.display = 'none';
                st_st_Gender_SM.style.display = 'none';
                st_st_NIC_SM.style.display = 'none';
                st_st_Mobile_SM.style.display = 'none';
                st_st_Landline_SM.innerHTML = text;
                st_st_Landline_SM.style.display = 'block';
                st_st_Email_SM.style.display = 'none';
                st_st_Uni_SM.style.display = 'none';
                st_st_Degree_SM.style.display = 'none';
                st_st_Field_SM.style.display = 'none';
                st_st_Pass_SM.style.display = 'none';
                st_st_Pass_confrm_SM.style.display = 'none';
            } else if (text == 'Please enter email') {
                st_st_FName_SM.innerHTML = text;
                st_st_main_SM.style.display = 'none ';
                st_st_FName_SM.style.display = 'none';
                st_st_LName_SM.style.display = 'none';
                st_st_FullName_SM.style.display = 'none';
                st_st_FullNameInit_SM.style.display = 'none';
                st_st_Address_SM.style.display = 'none';
                st_st_Gender_SM.style.display = 'none';
                st_st_NIC_SM.style.display = 'none';
                st_st_Mobile_SM.style.display = 'none';
                st_st_Landline_SM.style.display = 'none';
                st_st_Email_SM.innerHTML = text;
                st_st_Email_SM.style.display = 'block';
                st_st_Uni_SM.style.display = 'none';
                st_st_Degree_SM.style.display = 'none';
                st_st_Field_SM.style.display = 'none';
                st_st_Pass_SM.style.display = 'none';
                st_st_Pass_confrm_SM.style.display = 'none';
            } else if (text == 'Please select university or institute') {
                st_st_FName_SM.innerHTML = text;
                st_st_main_SM.style.display = 'none ';
                st_st_FName_SM.style.display = 'none';
                st_st_LName_SM.style.display = 'none';
                st_st_FullName_SM.style.display = 'none';
                st_st_FullNameInit_SM.style.display = 'none';
                st_st_Address_SM.style.display = 'none';
                st_st_Gender_SM.style.display = 'none';
                st_st_NIC_SM.style.display = 'none';
                st_st_Mobile_SM.style.display = 'none';
                st_st_Landline_SM.style.display = 'none';
                st_st_Email_SM.style.display = 'none'
                st_st_Uni_SM.innerHTML = text;;
                st_st_Uni_SM.style.display = 'block';
                st_st_Degree_SM.style.display = 'none';
                st_st_Field_SM.style.display = 'none';
                st_st_Pass_SM.style.display = 'none';
                st_st_Pass_confrm_SM.style.display = 'none';
            } else if (text == 'Please select degree') {
                st_st_FName_SM.innerHTML = text;
                st_st_main_SM.style.display = 'none ';
                st_st_FName_SM.style.display = 'none';
                st_st_LName_SM.style.display = 'none';
                st_st_FullName_SM.style.display = 'none';
                st_st_FullNameInit_SM.style.display = 'none';
                st_st_Address_SM.style.display = 'none';
                st_st_Gender_SM.style.display = 'none';
                st_st_NIC_SM.style.display = 'none';
                st_st_Mobile_SM.style.display = 'none';
                st_st_Landline_SM.style.display = 'none';
                st_st_Email_SM.style.display = 'none';
                st_st_Uni_SM.style.display = 'none';
                st_st_Degree_SM.innerHTML = text;
                st_st_Degree_SM.style.display = 'block';
                st_st_Field_SM.style.display = 'none';
                st_st_Pass_SM.style.display = 'none';
                st_st_Pass_confrm_SM.style.display = 'none';
            } else if (text == 'Please select field') {
                st_st_FName_SM.innerHTML = text;
                st_st_main_SM.style.display = 'none ';
                st_st_FName_SM.style.display = 'none';
                st_st_LName_SM.style.display = 'none';
                st_st_FullName_SM.style.display = 'none';
                st_st_FullNameInit_SM.style.display = 'none';
                st_st_Address_SM.style.display = 'none';
                st_st_Gender_SM.style.display = 'none';
                st_st_NIC_SM.style.display = 'none';
                st_st_Mobile_SM.style.display = 'none';
                st_st_Landline_SM.style.display = 'none';
                st_st_Email_SM.style.display = 'none';
                st_st_Uni_SM.style.display = 'none';
                st_st_Degree_SM.style.display = 'none';
                st_st_FName_SM.innerHTML = text;
                st_st_Field_SM.style.display = 'block';
                st_st_Pass_SM.style.display = 'none';
                st_st_Pass_confrm_SM.style.display = 'none';
            } else if (text == 'Please enter password') {
                st_st_main_SM.style.display = 'none';
                st_st_FName_SM.style.display = 'none';
                st_st_LName_SM.style.display = 'none';
                st_st_FullName_SM.style.display = 'none';
                st_st_FullNameInit_SM.style.display = 'none';
                st_st_Address_SM.style.display = 'none';
                st_st_Gender_SM.style.display = 'none';
                st_st_NIC_SM.style.display = 'none';
                st_st_Mobile_SM.style.display = 'none';
                st_st_Landline_SM.style.display = 'none';
                st_st_Email_SM.style.display = 'none';
                st_st_Uni_SM.style.display = 'none';
                st_st_Degree_SM.style.display = 'none';
                st_st_Field_SM.style.display = 'none';
                st_st_Pass_SM.innerHTML = text;
                st_st_Pass_SM.style.display = 'block';
                st_st_Pass_confrm_SM.style.display = 'none';
            } else if (text == 'Please enter confirm password') {
                st_st_main_SM.style.display = 'none';
                st_st_FName_SM.style.display = 'none';
                st_st_LName_SM.style.display = 'none';
                st_st_FullName_SM.style.display = 'none';
                st_st_FullNameInit_SM.style.display = 'none';
                st_st_Address_SM.style.display = 'none';
                st_st_Gender_SM.style.display = 'none';
                st_st_NIC_SM.style.display = 'none';
                st_st_Mobile_SM.style.display = 'none';
                st_st_Landline_SM.style.display = 'none';
                st_st_Email_SM.style.display = 'none';
                st_st_Uni_SM.style.display = 'none';
                st_st_Degree_SM.style.display = 'none';
                st_st_Field_SM.style.display = 'none';
                st_st_Pass_SM.style.display = 'none';
                st_st_Pass_confrm_SM.innerHTML = text;
                st_st_Pass_confrm_SM.style.display = 'block';
            } else if (text == "Password doesn't match") {
                st_st_main_SM.style.display = 'none';
                st_st_FName_SM.style.display = 'none';
                st_st_LName_SM.style.display = 'none';
                st_st_FullName_SM.style.display = 'none';
                st_st_FullNameInit_SM.style.display = 'none';
                st_st_Address_SM.style.display = 'none';
                st_st_Gender_SM.style.display = 'none';
                st_st_NIC_SM.style.display = 'none';
                st_st_Mobile_SM.style.display = 'none';
                st_st_Landline_SM.style.display = 'none';
                st_st_Email_SM.style.display = 'none';
                st_st_Uni_SM.style.display = 'none';
                st_st_Degree_SM.style.display = 'none';
                st_st_Field_SM.style.display = 'none';
                st_st_Pass_SM.style.display = 'none';
                st_st_Pass_confrm_SM.innerHTML = text;
                st_st_Pass_confrm_SM.style.display = 'block';
            } else {
                if (text == 'success') {
                    st_st_main_SM.innerHTML = text;
                    st_st_main_SM.style.display = 'block';
                    st_st_FName_SM.style.display = 'none';
                    st_st_LName_SM.style.display = 'none';
                    st_st_FullName_SM.style.display = 'none';
                    st_st_FullNameInit_SM.style.display = 'none';
                    st_st_Address_SM.style.display = 'none';
                    st_st_Gender_SM.style.display = 'none';
                    st_st_NIC_SM.style.display = 'none';
                    st_st_Mobile_SM.style.display = 'none';
                    st_st_Landline_SM.style.display = 'none';
                    st_st_Email_SM.style.display = 'none';
                    st_st_Uni_SM.style.display = 'none';
                    st_st_Degree_SM.style.display = 'none';
                    st_st_Field_SM.style.display = 'none';
                    st_st_Pass_SM.style.display = 'none';
                    st_st_form.style.display = 'none';
                    st_st_form_success.style.display = 'block';
                    location.reload();
                } else {
                    st_st_main_SM.innerHTML = text;
                    st_st_main_SM.style.display = 'block';
                    st_st_FName_SM.style.display = 'none';
                    st_st_LName_SM.style.display = 'none';
                    st_st_FullName_SM.style.display = 'none';
                    st_st_FullNameInit_SM.style.display = 'none';
                    st_st_Address_SM.style.display = 'none';
                    st_st_Gender_SM.style.display = 'none';
                    st_st_NIC_SM.style.display = 'none';
                    st_st_Mobile_SM.style.display = 'none';
                    st_st_Landline_SM.style.display = 'none';
                    st_st_Email_SM.style.display = 'none';
                    st_st_Uni_SM.style.display = 'none';
                    st_st_Degree_SM.style.display = 'none';
                    st_st_Field_SM.style.display = 'none';
                    st_st_Pass_SM.style.display = 'none';
                }
            }
        }
    }

    var f = new FormData();
    f.append("st_st_FName", st_st_FName.value);
    f.append("st_st_LName", st_st_LName.value);
    f.append("st_st_FullName", st_st_FullName.value);
    f.append("st_st_FullNameInit", st_st_FullNameInit.value);
    f.append("st_st_Address", st_st_Address.value);
    f.append("st_st_Gender", st_st_Gender.value);
    f.append("st_st_NIC", st_st_NIC.value);
    f.append("st_st_Mobile", st_st_Mobile.value);
    f.append("st_st_Landline", st_st_Landline.value);
    f.append("st_st_Email", st_st_Email.value);
    f.append("st_st_Uni", st_st_Uni.value);
    f.append("st_st_Degree", st_st_Degree.value);
    f.append("st_st_Field", st_st_Field.value);
    f.append("st_st_Pass", st_st_Pass.value);
    f.append("st_st_Pass_confrm", st_st_Pass_confrm.value);

    r.open("POST", "student_register_process_student.php", true);
    r.send(f);

}


function enter_naita_id(nic) {
    console.log(nic);
    var nt_id = document.getElementById('add_nt_id' + nic);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;

            console.log(t);
            alert(t);
            if (t == "success") {
                location.reload();
            }

        }
    }
    var f = new FormData();
    f.append("nic", nic);
    f.append("nt_id", nt_id.value);
    r.open("POST", "enter_naita_id_process.php", true);
    r.send(f);
}

function update_naita_id(nic) {
    console.log(nic);
    var nt_id = document.getElementById('update_nt_id' + nic);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t != "") {
                console.log(t);
                alert(t);
                location.reload();
            }

        }
    }
    var f = new FormData();
    f.append("nic", nic);
    f.append("nt_id", nt_id.value);
    r.open("POST", "update_naita_id_process.php", true);
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
    var admin_add_deg_deg_other = document.getElementById("admin_add_deg_deg_other");

    if (elm.value == "y") {
        admin_add_deg_deg_other.style.display = 'block';
    } else {
        admin_add_deg_deg_other.style.display = 'none';
    }
}

function admin_indi_uni_update() {
    console.log('admin_indi_uni_update');
    var admin_indi_uni_name = document.getElementById('admin_indi_uni_name');
    var admin_indi_uni_contact_1 = document.getElementById('admin_indi_uni_contact_1');
    var admin_indi_uni_contact_2 = document.getElementById('admin_indi_uni_contact_2');
    var admin_indi_uni_email = document.getElementById('admin_indi_uni_email');
    var admin_indi_uni_password = document.getElementById('admin_indi_uni_password');

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (this.readyState == 4) {
            var t = r.responseText;
            console.log(t);
            document.getElementById('admin_indi_uni_main').innerHTML = t;
            location.reload();
        }
    }
    var f = new FormData();
    f.append('admin_indi_uni_name', admin_indi_uni_name.value);
    f.append('admin_indi_uni_contact_1', admin_indi_uni_contact_1.value);
    f.append('admin_indi_uni_contact_2', admin_indi_uni_contact_2.value);
    f.append('admin_indi_uni_email', admin_indi_uni_email.value);
    f.append('admin_indi_uni_password', admin_indi_uni_password.value);
    r.open("POST", "admin_indi_uni_update_process.php", true);
    r.send(f);
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
        createassesmnt_degre.removeAttribute('disabled');
    } else {
        createassesmnt_degre.setAttribute('disabled', true);
    }
    if (createassesmnt_degre.value != 'x') {
        createassesmnt_field.removeAttribute('disabled');
    } else {
        createassesmnt_field.setAttribute('disabled', true);
    }

    if (createassesmnt_field.value != 'x') {
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

//=======================================================================================================

function admin_uni_reg() {
    let admin_uni_reg_uni_type = document.getElementById('admin_uni_reg_uni_type').value;
    let admin_uni_reg_uni = document.getElementById('admin_uni_reg_uni').value;
    let admin_uni_reg_uni_gov = document.getElementById('admin_uni_reg_uni_gov').value;
    let admin_uni_reg_uni_addr = document.getElementById('admin_uni_reg_uni_addr').value;
    let admin_uni_reg_uni_email = document.getElementById('admin_uni_reg_uni_email').value;
    let admin_uni_reg_uni_teli_1 = document.getElementById('admin_uni_reg_uni_teli_1').value;
    let admin_uni_reg_uni_teli_2 = document.getElementById('admin_uni_reg_uni_teli_2').value;
    let admin_uni_reg_uni_pass = document.getElementById('admin_uni_reg_uni_pass').value;

    let admin_uni_reg_uni_type_sm = document.getElementById('admin_uni_reg_uni_type_sm');
    let admin_uni_reg_uni_sm = document.getElementById('admin_uni_reg_uni_sm');
    let admin_uni_reg_uni_gov_sm = document.getElementById('admin_uni_reg_uni_gov_sm');
    let admin_uni_reg_uni_addr_sm = document.getElementById('admin_uni_reg_uni_addr_sm');
    let admin_uni_reg_uni_email_sm = document.getElementById('admin_uni_reg_uni_email_sm');
    let admin_uni_reg_uni_teli_1_sm = document.getElementById('admin_uni_reg_uni_teli_1_sm');
    let admin_uni_reg_uni_teli_2_sm = document.getElementById('admin_uni_reg_uni_teli_2_sm');
    let admin_uni_reg_uni_pass_sm = document.getElementById('admin_uni_reg_uni_pass_sm');
    let admin_uni_reg_uni_main_sm = document.getElementById('admin_uni_reg_uni_main_sm');

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (this.readyState == 4) {
            var t = r.responseText;
            console.log(t);

            if (t == 'Please select university type') {
                admin_uni_reg_uni_main_sm.innerHTML = '';
                admin_uni_reg_uni_type_sm.innerHTML = t;
                admin_uni_reg_uni_sm.innerHTML = '';
                admin_uni_reg_uni_gov_sm.innerHTML = '';
                admin_uni_reg_uni_addr_sm.innerHTML = '';
                admin_uni_reg_uni_email_sm.innerHTML = '';
                admin_uni_reg_uni_teli_1_sm.innerHTML = '';
                admin_uni_reg_uni_teli_2_sm.innerHTML = '';
                admin_uni_reg_uni_pass_sm.innerHTML = '';
            } else if (t == 'Please enter university name') {
                admin_uni_reg_uni_main_sm.innerHTML = '';
                admin_uni_reg_uni_type_sm.innerHTML = '';
                admin_uni_reg_uni_sm.innerHTML = t;
                admin_uni_reg_uni_gov_sm.innerHTML = '';
                admin_uni_reg_uni_addr_sm.innerHTML = '';
                admin_uni_reg_uni_email_sm.innerHTML = '';
                admin_uni_reg_uni_teli_1_sm.innerHTML = '';
                admin_uni_reg_uni_teli_2_sm.innerHTML = '';
                admin_uni_reg_uni_pass_sm.innerHTML = '';
            } else if (t == 'Please select government or not') {
                admin_uni_reg_uni_main_sm.innerHTML = '';
                admin_uni_reg_uni_type_sm.innerHTML = '';
                admin_uni_reg_uni_sm.innerHTML = '';
                admin_uni_reg_uni_gov_sm.innerHTML = t;
                admin_uni_reg_uni_addr_sm.innerHTML = '';
                admin_uni_reg_uni_email_sm.innerHTML = '';
                admin_uni_reg_uni_teli_1_sm.innerHTML = '';
                admin_uni_reg_uni_teli_2_sm.innerHTML = '';
                admin_uni_reg_uni_pass_sm.innerHTML = '';
            } else if (t == 'Please enter university address') {
                admin_uni_reg_uni_main_sm.innerHTML = '';
                admin_uni_reg_uni_type_sm.innerHTML = '';
                admin_uni_reg_uni_sm.innerHTML = '';
                admin_uni_reg_uni_gov_sm.innerHTML = '';
                admin_uni_reg_uni_addr_sm.innerHTML = t;
                admin_uni_reg_uni_email_sm.innerHTML = '';
                admin_uni_reg_uni_teli_1_sm.innerHTML = '';
                admin_uni_reg_uni_teli_2_sm.innerHTML = '';
                admin_uni_reg_uni_pass_sm.innerHTML = '';
            } else if (t == 'Please enter university email') {
                admin_uni_reg_uni_main_sm.innerHTML = '';
                admin_uni_reg_uni_type_sm.innerHTML = '';
                admin_uni_reg_uni_sm.innerHTML = '';
                admin_uni_reg_uni_gov_sm.innerHTML = '';
                admin_uni_reg_uni_addr_sm.innerHTML = '';
                admin_uni_reg_uni_email_sm.innerHTML = t;
                admin_uni_reg_uni_teli_1_sm.innerHTML = '';
                admin_uni_reg_uni_teli_2_sm.innerHTML = '';
                admin_uni_reg_uni_pass_sm.innerHTML = '';
            } else if (t == 'Please enter telephone no 1') {
                admin_uni_reg_uni_main_sm.innerHTML = '';
                admin_uni_reg_uni_type_sm.innerHTML = '';
                admin_uni_reg_uni_sm.innerHTML = '';
                admin_uni_reg_uni_gov_sm.innerHTML = '';
                admin_uni_reg_uni_addr_sm.innerHTML = '';
                admin_uni_reg_uni_email_sm.innerHTML = '';
                admin_uni_reg_uni_teli_1_sm.innerHTML = t;
                admin_uni_reg_uni_teli_2_sm.innerHTML = '';
                admin_uni_reg_uni_pass_sm.innerHTML = '';
            } else if (t == 'Please enter telephone no 2') {
                admin_uni_reg_uni_main_sm.innerHTML = '';
                admin_uni_reg_uni_type_sm.innerHTML = '';
                admin_uni_reg_uni_sm.innerHTML = '';
                admin_uni_reg_uni_gov_sm.innerHTML = '';
                admin_uni_reg_uni_addr_sm.innerHTML = '';
                admin_uni_reg_uni_email_sm.innerHTML = '';
                admin_uni_reg_uni_teli_1_sm.innerHTML = '';
                admin_uni_reg_uni_teli_2_sm.innerHTML = t;
                admin_uni_reg_uni_pass_sm.innerHTML = '';
            } else if (t == 'Please enter password') {
                admin_uni_reg_uni_main_sm.innerHTML = '';
                admin_uni_reg_uni_type_sm.innerHTML = '';
                admin_uni_reg_uni_sm.innerHTML = '';
                admin_uni_reg_uni_gov_sm.innerHTML = '';
                admin_uni_reg_uni_addr_sm.innerHTML = '';
                admin_uni_reg_uni_email_sm.innerHTML = '';
                admin_uni_reg_uni_teli_1_sm.innerHTML = '';
                admin_uni_reg_uni_teli_2_sm.innerHTML = '';
                admin_uni_reg_uni_pass_sm.innerHTML = t;
            } else if (t == 'This university already registered') {
                admin_uni_reg_uni_main_sm.classList.add('text-danger', 'fw-bold', 'fs-4', 'text-center', 'mt-2', 'd-block');
                admin_uni_reg_uni_main_sm.innerHTML = t;
                admin_uni_reg_uni_type_sm.innerHTML = '';
                admin_uni_reg_uni_sm.innerHTML = '';
                admin_uni_reg_uni_gov_sm.innerHTML = '';
                admin_uni_reg_uni_addr_sm.innerHTML = '';
                admin_uni_reg_uni_email_sm.innerHTML = '';
                admin_uni_reg_uni_teli_1_sm.innerHTML = '';
                admin_uni_reg_uni_teli_2_sm.innerHTML = '';
                admin_uni_reg_uni_pass_sm.innerHTML = '';
            } else if (t == 'success') {
                admin_uni_reg_uni_main_sm.classList.add('text-success', 'fw-bold', 'fs-4', 'text-center', 'mt-2', 'd-block');
                admin_uni_reg_uni_main_sm.innerHTML = t;
                admin_uni_reg_uni_type_sm.innerHTML = '';
                admin_uni_reg_uni_sm.innerHTML = '';
                admin_uni_reg_uni_gov_sm.innerHTML = '';
                admin_uni_reg_uni_addr_sm.innerHTML = '';
                admin_uni_reg_uni_email_sm.innerHTML = '';
                admin_uni_reg_uni_teli_1_sm.innerHTML = '';
                admin_uni_reg_uni_teli_2_sm.innerHTML = '';
                admin_uni_reg_uni_pass_sm.innerHTML = '';
                location.reload();
            } else {
                admin_uni_reg_uni_main_sm.classList = ['text-danger', 'fw-bold', 'fs-4', 'text-center', 'mt-2', 'd-block'];
                admin_uni_reg_uni_main_sm.innerHTML = t;
                admin_uni_reg_uni_type_sm.innerHTML = '';
                admin_uni_reg_uni_sm.innerHTML = '';
                admin_uni_reg_uni_gov_sm.innerHTML = '';
                admin_uni_reg_uni_addr_sm.innerHTML = '';
                admin_uni_reg_uni_email_sm.innerHTML = '';
                admin_uni_reg_uni_teli_1_sm.innerHTML = '';
                admin_uni_reg_uni_teli_2_sm.innerHTML = '';
                admin_uni_reg_uni_pass_sm.innerHTML = '';
            }

        }
    }
    var f = new FormData();
    f.append('admin_uni_reg_uni_type', admin_uni_reg_uni_type);
    f.append('admin_uni_reg_uni', admin_uni_reg_uni);
    f.append('admin_uni_reg_uni_gov', admin_uni_reg_uni_gov);
    f.append('admin_uni_reg_uni_addr', admin_uni_reg_uni_addr);
    f.append('admin_uni_reg_uni_email', admin_uni_reg_uni_email);
    f.append('admin_uni_reg_uni_teli_1', admin_uni_reg_uni_teli_1);
    f.append('admin_uni_reg_uni_teli_2', admin_uni_reg_uni_teli_2);
    f.append('admin_uni_reg_uni_pass', admin_uni_reg_uni_pass);
    r.open("POST", "admin_uni_reg_process.php", true);
    r.send(f);


}

function admin_uni_reg_close() {
    admin_uni_reg_uni_main_sm.classList = ['text-danger', 'fw-bold', 'fs-4', 'text-center', 'mt-2', 'd-block'];
    document.getElementById('admin_uni_reg_uni_type').value = '';
    document.getElementById('admin_uni_reg_uni').value = '';
    document.getElementById('admin_uni_reg_uni_gov').value = '';
    document.getElementById('admin_uni_reg_uni_addr').value = '';
    document.getElementById('admin_uni_reg_uni_email').value = '';
    document.getElementById('admin_uni_reg_uni_teli_1').value = '';
    document.getElementById('admin_uni_reg_uni_teli_2').value = '';
    document.getElementById('admin_uni_reg_uni_pass').value = '';
}

function admin_add_deg() {
    console.log('admin_add_deg');
    let admin_add_deg_uni = document.getElementById('admin_add_deg_uni');
    let admin_add_deg_deg = document.getElementById('admin_add_deg_deg');
    let admin_add_deg_deg_other = document.getElementById('admin_add_deg_deg_other');

    let admin_add_deg_main = document.getElementById('admin_add_deg_main');
    let admin_add_deg_uni_sm = document.getElementById('admin_add_deg_uni_sm');
    let admin_add_deg_deg_sm = document.getElementById('admin_add_deg_deg_sm');
    let admin_add_deg_deg_other_sm = document.getElementById('admin_add_deg_deg_other_sm');

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (this.readyState == 4) {
            var t = r.responseText;
            console.log(t);
            if (t == 'Please select university') {
                admin_add_deg_main.innerHTML = '';
                admin_add_deg_uni_sm.innerHTML = t;
                admin_add_deg_deg_sm.innerHTML = '';
                admin_add_deg_deg_other_sm.innerHTML = '';
            } else if (t == 'Please select degree') {
                admin_add_deg_main.innerHTML = '';
                admin_add_deg_uni_sm.innerHTML = '';
                admin_add_deg_deg_sm.innerHTML = t;
                admin_add_deg_deg_other_sm.innerHTML = '';
            } else if (t == 'Please enter other degree') {
                admin_add_deg_main.innerHTML = '';
                admin_add_deg_uni_sm.innerHTML = '';
                admin_add_deg_deg_sm.innerHTML = '';
                admin_add_deg_deg_other_sm.innerHTML = t;
            } else if (t == 'success') {
                admin_add_deg_main.classList.add('text-success', 'fw-bold', 'fs-4', 'text-center', 'mt-2', 'd-block');
                admin_add_deg_main.innerHTML = t;
                admin_add_deg_uni_sm.innerHTML = '';
                admin_add_deg_deg_sm.innerHTML = '';
                admin_add_deg_deg_other_sm.innerHTML = '';
                location.reload();
            } else if (t == 'This degree already have') {
                admin_add_deg_main.classList.add('text-danger', 'fs-4', 'text-center', 'mt-2');
                admin_add_deg_main.innerHTML = t;
                admin_add_deg_uni_sm.innerHTML = '';
                admin_add_deg_deg_sm.innerHTML = '';
                admin_add_deg_deg_other_sm.innerHTML = '';
            } else {
                admin_add_deg_main.classList.add('text-danger', 'fw-bold', 'fs-4', 'text-center', 'mt-2', 'd-block');
                admin_add_deg_main.innerHTML = t;
                admin_add_deg_uni_sm.innerHTML = '';
                admin_add_deg_deg_sm.innerHTML = '';
                admin_add_deg_deg_other_sm.innerHTML = '';
            }
        }
    }
    var f = new FormData();
    f.append('admin_add_deg_uni', admin_add_deg_uni.value);
    f.append('admin_add_deg_deg', admin_add_deg_deg.value);
    f.append('admin_add_deg_deg_other', admin_add_deg_deg_other.value);
    r.open("POST", "admin_add_deg_process.php", true);
    r.send(f);
}

function admin_add_deg_uni_close() {
    console.log('admin_add_deg_uni_close');
    document.getElementById('admin_add_deg_main').value = '';
    document.getElementById('admin_add_deg_uni').value = 'x';
    document.getElementById('admin_add_deg_deg').value = 'x';
    document.getElementById('admin_add_deg_deg_other').value = '';
}

function admin_add_field() {
    console.log('admin_add_field');
    let admin_add_field_deg = document.getElementById('admin_add_field_deg');
    let admin_add_field_field = document.getElementById('admin_add_field_field');

    let admin_add_field_main = document.getElementById('admin_add_field_main');
    let admin_add_field_deg_sm = document.getElementById('admin_add_field_deg_sm');
    let admin_add_field_field_sm = document.getElementById('admin_add_field_field_sm');

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (this.readyState == 4) {
            var t = r.responseText;
            console.log(t);
            if (t == 'Please select Degree') {
                admin_add_field_main.innerHTML = '';
                admin_add_field_deg_sm.innerHTML = t;
                admin_add_field_field_sm.innerHTML = '';
            } else if (t == 'Please enter field') {
                admin_add_field_main.innerHTML = '';
                admin_add_field_deg_sm.innerHTML = '';
                admin_add_field_field_sm.innerHTML = t;
            } else if (t == 'success') {
                admin_add_field_main.classList.add('text-success', 'text-center', 'mt-2');
                admin_add_field_main.innerHTML = t;
                admin_add_field_deg_sm.innerHTML = '';
                admin_add_field_field_sm.innerHTML = '';
                location.reload();
            } else if (t == 'This field already registered') {
                admin_add_field_main.classList.add('text-danger', 'text-center', 'mt-2');
                admin_add_field_main.innerHTML = t;
                admin_add_field_deg_sm.innerHTML = '';
                admin_add_field_field_sm.innerHTML = '';
            } else {
                admin_add_field_main.classList.add('text-danger', 'text-center', 'mt-2');
                admin_add_field_main.innerHTML = t;
                admin_add_field_deg_sm.innerHTML = '';
                admin_add_field_field_sm.innerHTML = '';
            }
        }
    }
    var f = new FormData();
    f.append('admin_add_field_deg', admin_add_field_deg.value);
    f.append('admin_add_field_field', admin_add_field_field.value);
    r.open("POST", "admin_add_field_process.php", true);
    r.send(f);
}

//========================================Assesments=======================================================================

function admin_assessment_sort() {
    var admin_assessment_sort_srch = document.getElementById('admin_assessment_sort_srch');
    var admin_assessment_sort_preabs = document.getElementById('admin_assessment_sort_preabs');
    var admin_assessment_sort_psfl = document.getElementById('admin_assessment_sort_psfl');
    var admin_assessment_sort_from = document.getElementById('admin_assessment_sort_from');
    var admin_assessment_sort_to = document.getElementById('admin_assessment_sort_to');
    console.log('admin_assessment_sort');
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (this.readyState == 4) {
            var t = r.responseText;
            console.log(t);
            document.getElementById('admin_assessment_sort_table').innerHTML = t;
        }
    }
    var f = new FormData();
    f.append('admin_assessment_sort_srch', admin_assessment_sort_srch.value);
    f.append('admin_assessment_sort_preabs', admin_assessment_sort_preabs.value);
    f.append('admin_assessment_sort_psfl', admin_assessment_sort_psfl.value);
    f.append('admin_assessment_sort_from', admin_assessment_sort_from.value);
    f.append('admin_assessment_sort_to', admin_assessment_sort_to.value);
    r.open("POST", "admin_assessment_sort_process.php", true);
    r.send(f);
}

function assessment_create() {
    console.log('assessment_create');
    var count = 0;
    var rows = document.querySelectorAll('table[id=tb_create_assesmnt] tr[id=ca_td]');
    var createassesmnt_date = document.getElementById('createassesmnt_date');
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (this.readyState == 4) {
            var t = r.responseText;
            console.log(t);
            document.getElementById('createassesmnt_main').innerHTML = t;
            if (t == 'success') {
                location.reload();
            }
        }
    }
    var f = new FormData();
    console.log(rows.length);
    for (let index = 0; index < rows.length; index++) {
        var checkbox = rows[index].getElementsByTagName('input')[0];
        console.log(checkbox.checked);

        if (checkbox.checked) {
            var nt_id = rows[index].getElementsByTagName("td")[2];
            f.append("nt_id" + index, nt_id.innerHTML);
        }
        count++;
    }
    f.append('count', count);
    f.append('createassesmnt_date', createassesmnt_date.value);
    r.open("POST", "assessment_create_process.php", true);
    r.send(f);

}

function assessment_checked(nt_id) {
    // console.log('assessment_checked');

    // let td = document.querySelectorAll('table[id=assessment_table] tbody tr td[id=nt]');
    // let nt_id = td[1].innerHTML;
    let td2 = document.querySelectorAll('table[id=assessment_table] tbody tr td select[id=assess_select_pass' + nt_id + ']');
    let pass = td2[0].value;
    let td3 = document.querySelectorAll('table[id=assessment_table] tbody tr td select[id=assess_select_present' + nt_id + ']');
    let Present = td3[0].value;
    // console.log(td3[0].value);


    // td.forEach((element) => {
    //     let pass = element.querySelector('select[id=assess_select_pass]');
    //     console.log(pass.value);
    //   });

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.status == 200 && r.readyState == 4) {
            var t = r.responseText;
            console.log(t);
            alert(t);
        }
    }
    var f = new FormData();
    f.append("nt_id", nt_id);
    f.append("pass", pass);
    f.append("Present", Present);
    r.open('POST', 'assessment_checked_proccess.php', true);
    r.send(f);
}


function admin_add_inspector() {
    console.log('admin_add_inspector');
    let admin_add_inspector = document.getElementById('admin_add_inspector');
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.status == 200 && r.readyState == 4) {
            var t = r.responseText;
            console.log(t);
            document.getElementById('admin_add_inspector_main').innerHTML = t;
            if (t == 'sucess') {
                location.reload();
            }
        }
    }
    var f = new FormData();
    f.append("admin_add_inspector", admin_add_inspector.value);
    r.open('POST', 'admin_add_inspector_proccess.php', true);
    r.send(f);
}

function admin_add_inspector_close() {
    console.log('admin_add_inspector_close');
    document.getElementById('admin_add_inspector').value = 'x';
}

function send_student_registration_email(email) {
    console.log(email);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.status == 200 && r.readyState == 4) {
            var t = r.responseText;
            console.log(t);
            alert(t);
        } else if (r.readyState < 4) {
            console.log('sending.......');
        }
    }
    var f = new FormData();
    f.append("email", email);
    r.open('POST', 'email_for_student_registration.php', true);
    r.send(f);
}

function send_student_registration_email_individualy(uni_id, deg_id, field_id) {
    console.log('send_student_registration_email_individualy');
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.status == 200 && r.readyState == 4) {
            var t = r.responseText;
            console.log(t);
            alert(t);
        }
    }
    var f = new FormData();
    f.append("uni_id", uni_id);
    f.append("deg_id", deg_id);
    f.append("field_id", field_id);
    r.open('POST', 'email_for_student_registration_individual.php', true);
    r.send(f);
}

function send_training_establishment_email(uni_id) {
    console.log(uni_id);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.status == 200 && r.readyState == 4) {
            var t = r.responseText;
            console.log(t);
            alert(t);
        }
    }
    var f = new FormData();
    f.append("uni_id", uni_id);
    r.open('POST', 'email_for_training_establishment.php', true);
    r.send(f);
}

function training_reg(st_id) {

    var st_trn_training_place = document.getElementById('st_trn_training_place');
    var st_trn_worksite = document.getElementById('st_trn_worksite');
    var st_trn_start_date = document.getElementById('st_trn_start_date');
    var st_trn_coordinator = document.getElementById('st_trn_coordinator');
    var st_trn_coordinator_position = document.getElementById('st_trn_coordinator_position');
    var st_trn_coordinator_contact = document.getElementById('st_trn_coordinator_contact');
    var ad_st_main = document.getElementById('ad_st_main');

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.status == 200 && r.readyState == 4) {
            var t = r.responseText;
            console.log(t);
            ad_st_main.innerHTML = t;
            if (t == 'succss') {
                document.getElementById('ad_st_Form').style.display = 'none';
                document.getElementById('ad_st_success').style.display = 'block';
            }
        }
    }
    var f = new FormData();
    f.append("st_id", st_id);
    f.append("st_trn_training_place", st_trn_training_place.value);
    f.append("st_trn_worksite", st_trn_worksite.value);
    f.append("st_trn_start_date", st_trn_start_date.value);
    f.append("st_trn_coordinator", st_trn_coordinator.value);
    f.append("st_trn_coordinator_position", st_trn_coordinator_position.value);
    f.append("st_trn_coordinator_contact", st_trn_coordinator_contact.value);
    r.open('POST', 'training_establishment_reg_proccess.php', true);
    r.send(f);
}

function admin_add_admin() {
    console.log('admin_add_admin');
    var admin_add_admin_uname = document.getElementById('admin_add_admin_uname');
    var admin_add_admin_name = document.getElementById('admin_add_admin_name');
    var admin_add_admin_nic = document.getElementById('admin_add_admin_nic');
    var admin_add_admin_gender = document.getElementById('admin_add_admin_gender');
    var admin_add_admin_adtype = document.getElementById('admin_add_admin_adtype');
    var admin_add_admin_password = document.getElementById('admin_add_admin_password');
    var admin_add_admin_main = document.getElementById('admin_add_admin_main');

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.status == 200 && r.readyState == 4) {
            var t = r.responseText;
            console.log(t);
            admin_add_admin_main.innerHTML = t;
            if (t == 'sucess') {
                location.reload();
            }
        }
    }
    var f = new FormData();
    f.append("admin_add_admin_uname", admin_add_admin_uname.value);
    f.append("admin_add_admin_name", admin_add_admin_name.value);
    f.append("admin_add_admin_nic", admin_add_admin_nic.value);
    f.append("admin_add_admin_gender", admin_add_admin_gender.value);
    f.append("admin_add_admin_adtype", admin_add_admin_adtype.value);
    f.append("admin_add_admin_password", admin_add_admin_password.value);
    r.open('POST', 'admin_add_admin_proccess.php', true);
    r.send(f);
}

function st_prof_update_admin(st_id) {
    console.log(st_id);
    var st_prof_first_name = document.getElementById('st_prof_first_name');
    var st_prof_last_name = document.getElementById('st_prof_last_name');
    var st_prof_full_name_with_init = document.getElementById('st_prof_full_name_with_init');
    var st_prof_full_name = document.getElementById('st_prof_full_name');
    var st_prof_address = document.getElementById('st_prof_address');
    var st_prof_gender = document.getElementById('st_prof_gender');
    var st_prof_nic = document.getElementById('st_prof_nic');
    var st_prof_mobile = document.getElementById('st_prof_mobile');
    var st_prof_land = document.getElementById('st_prof_land');
    var st_prof_email = document.getElementById('st_prof_email');
    var st_prof_password = document.getElementById('st_prof_password');
    var st_prof_university = document.getElementById('st_prof_university');
    var st_prof_field = document.getElementById('st_prof_field');
    var st_prof_degree = document.getElementById('st_prof_degree');

    var st_prof_main = document.getElementById('st_prof_main');

    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.status == 200 && r.readyState == 4) {
            var t = r.responseText;
            console.log(t);
            st_prof_main.innerHTML = t;
            location.reload();
        }
    }
    var f = new FormData();
    f.append("st_prof_first_name", st_prof_first_name.value);
    f.append("st_prof_last_name", st_prof_last_name.value);
    f.append("st_prof_full_name_with_init", st_prof_full_name_with_init.value);
    f.append("st_prof_full_name", st_prof_full_name.value);
    f.append("st_prof_address", st_prof_address.value);
    f.append("st_prof_gender", st_prof_gender.value);
    f.append("st_prof_nic", st_prof_nic.value);
    f.append("st_prof_mobile", st_prof_mobile.value);
    f.append("st_prof_land", st_prof_land.value);
    f.append("st_prof_email", st_prof_email.value);
    f.append("st_prof_password", st_prof_password.value);
    f.append("st_prof_university", st_prof_university.value);
    f.append("st_prof_field", st_prof_field.value);
    f.append("st_prof_degree", st_prof_degree.value);
    r.open('POST', 'st_prof_update_admin_proccess.php', true);
    r.send(f);
}

function admin_all_students_data() {
    console.log('admin_all_students_data');
    let admin_all_students_data_search = document.getElementById('admin_all_students_data_search');
    let admin_all_students_data = document.getElementById('admin_all_students_data');
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.status == 200 && r.readyState == 4) {
            var t = r.responseText;
            console.log(t);
            admin_all_students_data.innerHTML = t;
        }
    }
    var f = new FormData();
    f.append('admin_all_students_data_search', admin_all_students_data_search.value);
    r.open('POST', 'admin_all_students_data.php', true);
    r.send(f);
}


function pg_admin_all_students_data(pg) {
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            console.log(r.responseText);
            document.getElementById('admin_all_students_data').innerHTML = r.responseText;
        }
    }
    r.open("GET", "admin_all_students_data.php?pg=" + pg, true);
    r.send();
}

function admin_all_full_students_data() {
    console.log('admin_all_full_students_data');
    let admin_all_full_students_data_search = document.getElementById('admin_all_full_students_data_search');
    let admin_all_full_students_data = document.getElementById('admin_all_full_students_data');
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.status == 200 && r.readyState == 4) {
            var t = r.responseText;
            console.log(t);
            admin_all_full_students_data.innerHTML = t;
        }
    }
    var f = new FormData();
    f.append('admin_all_full_students_data_search', admin_all_full_students_data_search.value);
    r.open('POST', 'admin_all_full_students_data.php', true);
    r.send(f);
}

function pg_admin_all_full_students_data(pg) {
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            console.log(r.responseText);
            document.getElementById('admin_all_full_students_data').innerHTML = r.responseText;
        }
    }
    r.open("GET", "admin_all_full_students_data.php?pg=" + pg, true);
    r.send();
}

function admin_add_ADD_training_place() {
    let admin_add_training_place_name = document.getElementById('admin_add_training_place_name');
    let admin_add_training_place_address = document.getElementById('admin_add_training_place_address');
    let admin_add_training_place_email = document.getElementById('admin_add_training_place_email');
    let admin_add_training_place_contact_1 = document.getElementById('admin_add_training_place_contact_1');
    let admin_add_training_place_contact_2 = document.getElementById('admin_add_training_place_contact_2');
    let admin_add_training_place_district = document.getElementById('admin_add_training_place_district');
    let admin_add_training_place_coordinator = document.getElementById('admin_add_training_place_coordinator');
    let admin_add_training_place_coordinator_position = document.getElementById('admin_add_training_place_coordinator_position');
    let admin_add_training_place_warn = document.getElementById('admin_add_training_place_warn');
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            console.log(r.responseText);
            admin_add_training_place_warn.innerHTML = r.responseText;
            if (r.responseText == 'success') {
                location.reload();
            }
        }
    }
    var f = new FormData();
    f.append('admin_add_training_place_name', admin_add_training_place_name.value);
    f.append('admin_add_training_place_address', admin_add_training_place_address.value);
    f.append('admin_add_training_place_email', admin_add_training_place_email.value);
    f.append('admin_add_training_place_contact_1', admin_add_training_place_contact_1.value);
    f.append('admin_add_training_place_district', admin_add_training_place_district.value);
    f.append('admin_add_training_place_contact_2', admin_add_training_place_contact_2.value);
    f.append('admin_add_training_place_coordinator', admin_add_training_place_coordinator.value);
    f.append('admin_add_training_place_coordinator_position', admin_add_training_place_coordinator_position.value);
    r.open("POST", "admin_add_ADD_training_place_process.php", true);
    r.send(f);
}

function admin_add_ADD_training_place_clear() {
    document.getElementById('admin_add_training_place_name').innerHTML = '';
    document.getElementById('admin_add_training_place_address').innerHTML = '';
    document.getElementById('admin_add_training_place_email').innerHTML = '';
    document.getElementById('admin_add_training_place_contact_1').innerHTML = '';
    document.getElementById('admin_add_training_place_contact_2').innerHTML = '';
    document.getElementById('admin_add_training_place_district').value = 'x'
    document.getElementById('admin_add_training_place_coordinator').innerHTML = '';
    document.getElementById('admin_add_training_place_coordinator_position').innerHTML = '';
    document.getElementById('admin_add_training_place_warn').innerHTML = '';
}

function pg_admin_all_training_places(pg) {
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            console.log(r.responseText);
            document.getElementById('all_training_places').innerHTML = r.responseText;
        }
    }
    r.open("GET", "admin_all_training_places.php?pg=" + pg, true);
    r.send();
}

function admin_add_ADD_worksite() {
    let admin_add_worksite_name = document.getElementById('admin_add_worksite_name');
    let admin_add_worksite_address = document.getElementById('admin_add_worksite_address');
    let admin_add_worksite_email = document.getElementById('admin_add_worksite_email');
    let admin_add_worksite_contact_1 = document.getElementById('admin_add_worksite_contact_1');
    let admin_add_worksite_contact_2 = document.getElementById('admin_add_worksite_contact_2');
    let admin_add_worksite_district = document.getElementById('admin_add_worksite_district');
    let admin_add_worksite_training_place = document.getElementById('admin_add_worksite_training_place');
    let admin_add_worksite_warn = document.getElementById('admin_add_worksite_warn');
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            console.log(r.responseText);
            admin_add_worksite_warn.innerHTML = r.responseText;
            if (r.responseText == 'success') {
                location.reload();
            }
        }
    }
    var f = new FormData();
    f.append('admin_add_worksite_name', admin_add_worksite_name.value);
    f.append('admin_add_worksite_address', admin_add_worksite_address.value);
    f.append('admin_add_worksite_email', admin_add_worksite_email.value);
    f.append('admin_add_worksite_contact_1', admin_add_worksite_contact_1.value);
    f.append('admin_add_worksite_contact_2', admin_add_worksite_contact_2.value);
    f.append('admin_add_worksite_district', admin_add_worksite_district.value);
    f.append('admin_add_worksite_training_place', admin_add_worksite_training_place.value);
    r.open("POST", "admin_add_ADD_worksite_process.php", true);
    r.send(f);
}










