<?php
$file_content = file_get_contents('data.json');
$data = json_decode($file_content, true);
$url_data = parse_url($_GET['host']);
parse_str($url_data['query'], $query);

$data['images'][] = [
    'scheme' => $url_data['scheme'],
    'host' => $url_data['host'],
    'path' => $url_data['path'],
    'resid' => urlencode($query['resid']),
    'authkey' => urlencode($query['authkey']),
    'width' => $query['width'],
    'height' => $query['height'],
];

file_put_contents('data.json', json_encode($data));
