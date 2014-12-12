
<?php
function array_count_values_ci($array) {
    $newArray = array();
    foreach ($array as $values) {
        if (!array_key_exists(strtolower($values), $newArray)) {
            $newArray[strtolower($values)] = 0;
        }
        $newArray[strtolower($values)] += 1;
    }
    return $newArray;
}
?>