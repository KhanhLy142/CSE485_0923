<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$favoriteColors = [
    'Anh' => 'đỏ',
    'Sơn' => 'trắng',
    'Thắng' => 'cam',
    'Tôi' => 'trắng'
];
$result = '';
foreach ($favoriteColors as $person => $color) {
    if (in_array($color, $arrs)) {
        $result .= "Màu $color là màu yêu thích của $person, ";
    }
}
$result = rtrim($result, ', ');
echo $result;
?>