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
            $return .= '<a href="' . $file_name . '?pg=' . ($pg - 1) . '">
                       <button class="btn btn-outline-secondary">previous</button>
                       </a>';
        } else {
            $return .= '<button class="btn btn-outline-secondary" disabled>previous</button>';
        }
        #=================================================================================================================================================================
        if ($pg > $first + $bt_count) {
            $return .= '<a href="' . $file_name . '?pg=' . $first . '">
                        <button class="btn btn-outline-secondary">==' . $first . '==</button>
                        </a> ... ';
        }
        #=================================================================================================================================================================
        for ($i = $pg - $bt_count; $i < $pg; $i++) {
            if ($i >= $first) {
                $return .= '<a href="' . $file_name . '?pg=' . $i . '">
                <button class="btn btn-outline-secondary">#' . $i . '#</button>
                </a>';
            }
        }
        #==============================================================================================================================================================
        $return .= '<button class="btn btn-dark"> ' . $pg . ' </button>';
        #==============================================================================================================================================================
        for ($i = $pg + 1; $i <= $pg + $bt_count; $i++) {
            if ($i <= $last) {
                $return .= '<a href="' . $file_name . '?pg=' . $i  . '">
                            <button class="btn btn-outline-secondary">@' . $i . '@</button>
                            </a> ';
            }
        }
        #======================================================================================================================================================
        if ($pg < $last - $bt_count + 1) {
            $return .= '... <a href="' . $file_name . '?pg=' . $last . '">
                       <button class="btn btn-outline-secondary">==' . $last . '==</button>
                       </a> ';
        }
        #======================================================================================================================================================
        if ($pg == $last) {
            $return .= '<button class="btn btn-outline-secondary" disabled>Next</button>';
        } else {
            $return .= '<a href="' . $file_name . '?pg=' . ($pg + 1) . '">
            <button class="btn btn-outline-secondary">next</button>
            </a>';
        }

        $return .= '</div>';

        return $return;
    }
}
