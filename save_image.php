<?php
header('Content-Type: application/json; charset=utf-8');

$file_content = file_get_contents('data.json');
$data = json_decode($file_content, true);

$result = true;

if ($_GET['host'] != '') {
    $url_data = parse_url($_GET['host']);
    $data = json_decode($file_content, true);
    $images_data = $data['images'];
    parse_str($url_data['query'], $query);
    $count = count($images_data);
    $resid = urlencode($query['resid']);

    for ($i = 0; $i < $count; $i++) {
        if ($images_data[$i]['resid'] == $resid) {
            $result = false;
            break;
        }
    }

    if ($result) {
        $data['images'][] = [
            'scheme' => $url_data['scheme'],
            'host' => $url_data['host'],
            'path' => $url_data['path'],
            'resid' => $resid,
            'authkey' => urlencode($query['authkey']),
            'width' => $query['width'],
            'height' => $query['height'],
        ];

        file_put_contents('data.json', json_encode($data));
    }
}
echo json_encode(['result' => $result]);
