<?php
function convertToLowerCase($arr) {
    foreach ($arr as $key => $value) {
        if (is_string($value)) {
            $arr[$key] = strtolower($value);
        }
    }
    return $arr;
}
$arr1 = ['1', 'B', 'C', 'E'];
$arr2 = ['a', 0, null, false];
$result1 = convertToLowerCase($arr1);
$result2 = convertToLowerCase($arr2);
echo "<pre>";
    echo "Kết quả arr1: \n";
    print_r($result1);
echo "</pre>";
echo "<pre>";
    echo "Kết quả arr2: \n";
    print_r($result2);
echo "</pre>";
?>

