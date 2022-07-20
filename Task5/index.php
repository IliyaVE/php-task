<?php
$my_array = [
["а1", "а2", "а3"],
["b1", "b2"],
["c1", "c2", "c3"],
["d1"],
];
$new_array = [];
$new_array_2 = [];
foreach ($my_array[0] as $value1) {
    foreach ($my_array[1] as $value2) {
        foreach ($my_array[2] as $value3) {
            foreach ($my_array[3] as $value4) {
                $new_array[] = array($value1, $value2, $value3, $value4);
            }
        }
    }
}
var_dump($new_array);
