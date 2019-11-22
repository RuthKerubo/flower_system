<?php
$hn = 'localhost';
$db = 'flower_system';
$un = 'root';
$pw = 'qwertyuiop';

$conn = new mysqli($hn, $un, $pw, $db);
if  ($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM  system";
$result = $conn->query($query);
if(!$result) die($conn->error);

$rows = $result->num_rows;

for ($j = 0;  $j < $rows; ++$j) {
    $result->data_seek($j);
    echo "Id: " . $result->fetch_assoc()['id'] . '<br>';
    $result->data_seek($j);
    echo "Block: " . $result->fetch_assoc()['block'] . '<br>';
    $result->data_seek($j);
    echo "Bed: " . $result->fetch_assoc()['bed'] . '<br>';
    $result->data_seek($j);
    echo "growth: " . $result->fetch_assoc()['growth'] . '<br>';
}

$insertquery = "INSERT INTO system VALUES" .
            "('$id', '$block', '$bed', '$"
?>
