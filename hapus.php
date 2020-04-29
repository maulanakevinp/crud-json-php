<?php
// Mendecode file.json
$data = json_decode(file_get_contents("file.json"), true);

$array_index = array();
foreach ($data as $key => $value) {
    if ($value['id'] == $_GET['id']) {
        $array_index[] = $key;
    }
}
foreach ($array_index as $row) {
    unset($data[$row]);
}

$data = array_values($data);
file_put_contents('file.json', json_encode($data,JSON_PRETTY_PRINT));

// Kembali ke beranda
header("Location:index.php");