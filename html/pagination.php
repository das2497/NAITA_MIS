<?php
class Pagination
{
    public static function pg($num_cont_per_pg, $num_of_data, $js_function)
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
            $return .= '<button class="btn btn-outline-secondary" onclick="' . $js_function . '(' . ($pg - 1) . ');">previous</button>';
        } else {
            $return .= '<button class="btn btn-outline-secondary" disabled>previous</button>';
        }

        if ($pg > $first + $bt_count) {
            $return .= '<button class="btn btn-outline-secondary" onclick="' . $js_function . '(' . $first . ');">' . $first . '</button> ... ';
        }

        for ($i = $pg - $bt_count; $i < $pg; $i++) {
            if ($i >= $first) {
                $return .= '<button class="btn btn-outline-secondary" onclick="' . $js_function . '(' . $i . ');">' . $i . '</button>';
            }
        }

        $return .= '<button class="btn btn-dark"> ' . $pg . ' </button>';

        for ($i = $pg + 1; $i <= $pg + $bt_count; $i++) {
            if ($i <= $last) {
                $return .= '<button class="btn btn-outline-secondary" onclick="' . $js_function . '(' . $i . ');">' . $i . '</button>';
            }
        }

        if ($pg < $last - $bt_count + 1) {
            $return .= '... <button class="btn btn-outline-secondary" onclick="' . $js_function . '(' . $last . ');">' . $last . '</button>';
        }

        if ($pg == $last) {
            $return .= '<button class="btn btn-outline-secondary" disabled>Next</button>';
        } else {
            $return .= '<button class="btn btn-outline-secondary" onclick="' . $js_function . '(' . ($pg + 1) . ');">next</button>';
        }

        $return .= '</div>';

        return $return;
    }
}
