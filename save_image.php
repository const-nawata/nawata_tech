<?php
//$images_data = [];
//$json_val = json_encode($images_data);


$file_content = file_get_contents('images.json');
$images_data = json_decode($file_content);
$images_data = json_decode($images_data, true);
$url_data = parse_url($_GET['host']);
parse_str($url_data['query'], $query);
$url_main =
    $url_data['scheme'] . '://' . $url_data['host'] . $url_data['path'] . '?resid=' . urlencode($query['resid']) . '&authkey=' . urlencode($query['authkey']);


$images_data[] = [
    'host' => $url_main,
    'width' => $query['width'],
    'height' => $query['height'],
];


$json_val = json_encode($images_data);

file_put_contents('images.json', json_encode($json_val));



