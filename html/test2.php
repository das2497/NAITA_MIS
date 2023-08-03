<?php
class Pagination
{
    public static function pg($num_cont_per_pg, $num_of_data, $file_name)
    {
        $first = 1;
        $bt_count = 3;
        $last = ceil($num_of_data / $num_cont_per_pg);

        if (isset($_GET['pg'])) {
            $pg = $_GET['pg'];
        } else {
            $pg = 1;
        }

        $return = '<div>';

        if ($pg > 1) {
            $return .= '<button class="btn btn-outline-secondary" onclick="Pagination(' . $pg - 1 . ',' . $file_name . ');">previous</button>';
        } else {
            $return .= '<button class="btn btn-outline-secondary" disabled>previous</button>';
        }
        #=================================================================================================================================================================
        if ($pg > $first + $bt_count) {
            $return .= '<button class="btn btn-outline-secondary" onclick="Pagination(' . $first . ',' . $file_name . ');">==' . $first . '==</button> ... ';
        }
        #=================================================================================================================================================================
        for ($i = $pg - $bt_count; $i < $pg; $i++) {
            if ($i >= $first) {
                $return .= '<button class="btn btn-outline-secondary" onclick="Pagination(' . $i . ',' . $file_name . ');">#' . $i . '#</button>';
            }
        }
        #==============================================================================================================================================================
        $return .= '<button class="btn btn-dark"> ' . $pg . ' </button>';
        #==============================================================================================================================================================
        for ($i = $pg + 1; $i <= $pg + $bt_count; $i++) {
            if ($i <= $last) {
                $return .= '<button class="btn btn-outline-secondary" onclick="Pagination(' . $i . ',' . $file_name . ');">@' . $i . '@</button>';
            }
        }
        #======================================================================================================================================================
        if ($pg < $last - $bt_count + 1) {
            $return .= '... <button class="btn btn-outline-secondary" onclick="Pagination(' . $last . ',' . $file_name . ');">==' . $last . '==</button>';
        }
        #======================================================================================================================================================
        if ($pg == $last) {
            $return .= '<button class="btn btn-outline-secondary" disabled>Next</button>';
        } else {
            $return .= '<button class="btn btn-outline-secondary" onclick="Pagination(' . $pg + 1 . ',' . $file_name . ');">next</button>';
        }

        $return .= '</div>';

        return $return;
    }
}
?>
<script>
    function Pagination(pg, file_name) {
        console.log(pg);
        var r = new XMLHttpRequest();
        r.onreadystatechange = function() {
            if (r.readyState == 4) {
                // console.log(r.responseText);
                // location.reload();
            }
        }
        r.open("GET", file_name + "?pg=" + pg, true);
        r.send();
    }
</script>