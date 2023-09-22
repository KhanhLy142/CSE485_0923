<?php
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
foreach ($array as $num) {
    if ($num >= 100 && $num <= 200 && $num % 5 == 0) {
        echo $num . " ";
    }
}
?>
