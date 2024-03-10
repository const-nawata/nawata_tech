<?php
$file_content = file_get_contents('data.json');
$data = json_decode($file_content, true);
//$images_data = $data['images'];

$url_data = parse_url($_GET['host']);
parse_str($url_data['query'], $query);

$url_main =
    $url_data['scheme'] . '://' . $url_data['host'] . $url_data['path'] . '?resid=' . urlencode($query['resid']) . '&authkey=' . urlencode($query['authkey']);


$data['images'][] = [
    'host' => $url_main,
    'width' => $query['width'],
    'height' => $query['height'],
];

file_put_contents('data.json', json_encode($data));
