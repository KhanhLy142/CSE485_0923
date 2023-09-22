<?php
function convertToUpperCase($arr) {
    foreach ($arr as $key => $value) {
        if (is_string($value)) {
            $arr[$key] = strtoupper($value);
        }
    }
    return $arr;
}
$arr1 = ['1', 'b', 'c', 'd'];
$arr2 = ['a', 0, null, false];
$result1 = convertToUpperCase($arr1);
$result2 = convertToUpperCase($arr2);
echo "<pre>";
    echo "Kết quả arr1: \n";
    print_r($result1);
echo "</pre>";
echo "<pre>";
    echo "Kết quả arr2: \n";
    print_r($result2);
echo "</pre>";
?>
