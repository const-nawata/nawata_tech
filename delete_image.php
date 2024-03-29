<?php
header('Content-Type: application/json; charset=utf-8');

$file_content = file_get_contents('data.json');
$data = json_decode($file_content, true);
$result = false;

if ($_GET['index'] != '') {
    $data = json_decode($file_content, true);
    array_splice($data['images'], intval($_GET['index']), 1);
    file_put_contents('data.json', json_encode($data));
    $result = true;
}
echo json_encode(['result' => $result]);
