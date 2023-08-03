 <!-- Custom CSS -->
 <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
 <!-- Custom CSS -->
 <link rel="stylesheet" type="text/css" href="../assets/extra-libs/multicheck/multicheck.css" />
 <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" />
 <link href="../dist/css/style.min.css" rel="stylesheet" />

 <?php

    if (isset($_GET['pg'])) {
        $pg = $_GET['pg'];
    } else {
        $pg = 1;
    }

    ?>
 <div class="container">
     <div id="pgtbl" class="table-responsive">
         <h4>click to load</h4>
     </div>
 </div>
 <script>
     let pgtbl = document.getElementById('pgtbl');

     document.addEventListener('DOMContentLoaded', function() {
         pgload();
     });

     pgtbl.addEventListener('click', function() {
         pgload();
     });

     function pgload() {
         var r = new XMLHttpRequest();
         r.onreadystatechange = function() {
             if (this.readyState == 4) {
                 var t = r.responseText;
                 pgtbl.innerHTML = t;
             }
         }
         r.open("GET", "test_pg_load.php", true);
         r.send();
     }
 </script>