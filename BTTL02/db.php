<?php 
$conn = mysqli_connect(hostname: 'localhost', username: 'root',password: '',database:'user');

if (!$conn){
    die("Can not connect");
}

$sql = "SELECT * FROM Users ORDER BY ID ASC LIMIT 10";

$result = $conn->query($sql);

if ($result->num_rows > 0){
    $data = [];
    while ($row = $result->fetch_assoc()){
        $data[] = $row;
    }

    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
}
?>