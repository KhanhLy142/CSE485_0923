<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
echo'<style>
      table{
        border-collapse: collapse;
      }
      th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
     </style>';
echo '<table>';
echo'<tr><th>Tên khóa học</th></tr>';
foreach ($arrs as $index => $subject) {
    echo '<tr>';
    echo '<td>' .$subject . '</td>';
    echo '</tr>';
}
echo '</table>';
?>

