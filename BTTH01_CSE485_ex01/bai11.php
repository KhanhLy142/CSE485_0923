<?php
$array = array(1, 2, 3, 4, 5);
$index = 2;  // Phần tử thứ 3 (vị trí bắt đầu từ 0)
array_splice($array, $index, 1);
echo "<pre>";
print_r($array);
echo "</pre>";
?>