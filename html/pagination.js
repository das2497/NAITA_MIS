window.addEventListener('load', () => {
    pg_admin_university_university(1);
    pg_admin_student_university(1);
    // pg_admin_student_batch(1);
    console.log('window');
});

function pg_admin_university_university(pg) {
    console.log('pg_admin_university_university');
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            console.log(r.responseText);
            document.getElementById('pg_admin_university_university').innerHTML = r.responseText;
        }
    }
    r.open("GET", "pg_admin_university_university_process.php?pg=" + pg, true);
    r.send();
}

function pg_admin_student_university(pg) {
    console.log('pg_admin_student_university');
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            console.log(r.responseText);
            document.getElementById('pg_admin_student_university').innerHTML = r.responseText;
        }
    }
    r.open("GET", "pg_admin_student_university_process.php?pg=" + pg, true);
    r.send();
}