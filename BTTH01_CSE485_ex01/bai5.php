<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];
// Lấy giá trị = 3 với key là 'b'
$valueB = $a['b']['o']['b'];
echo $valueB . "\n";
// Lấy giá trị = 1 với key là 'c'
$valueC = $a['a']['c'];
echo $valueC . "\n";
// Lấy thông tin của phần tử có key 'a'
$infoA = $a['a'];
echo "<pre>";
print_r($infoA);
echo "</pre>";
?>