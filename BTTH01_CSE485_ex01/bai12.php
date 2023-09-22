<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];
// Lấy ra phần tử đầu tiên và phần tử cuối cùng trong mảng
$firstElement = reset($numbers);
$lastElement = end($numbers);
echo "Phần tử đầu tiên trong mảng: " . $firstElement . "<br>";
echo "Phần tử cuối cùng trong mảng: " . $lastElement . "<br>";
// Tìm số lớn nhất, số nhỏ nhất và tổng các giá trị trong mảng
$maxValue = max($numbers);
$minValue = min($numbers);
$sum = array_sum($numbers);
echo "Số lớn nhất trong mảng: " . $maxValue . "<br>";
echo "Số nhỏ nhất trong mảng: " . $minValue . "<br>";
echo "Tổng các giá trị trong mảng: " . $sum . "<br>";
// Sắp xếp mảng theo chiều tăng và giảm các giá trị
asort($numbers);
echo "Mảng sau khi sắp xếp tăng dần theo giá trị:<pre>";
print_r($numbers);
echo "</pre>";
arsort($numbers);
echo "Mảng sau khi sắp xếp giảm dần theo giá trị:<pre>";
print_r($numbers);
echo "</pre>";
// Sắp xếp mảng theo chiều tăng và giảm các key
ksort($numbers);
echo "Mảng sau khi sắp xếp tăng dần theo key:<pre>";
print_r($numbers);
echo "</pre>";
krsort($numbers);
echo "Mảng sau khi sắp xếp giảm dần theo key:<pre>";
print_r($numbers);
echo "</pre>";
?>