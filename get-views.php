<?php
$file = 'views.txt';
$count = file_exists($file) ? (int)file_get_contents($file) : 0;
echo json_encode(['count' => $count]);
?>