<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Nawata</title>
    <link rel="stylesheet" href="public/css/main.css" type="text/css"/>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<body>
<div class="site-title">Our Photos</div>

<div class="image-host">
    <label for="host">HOST</label>
    <input type="text" id="host" name="host" size="90">
    <button type="button" id="add_image_btn">Додати</button>
</div>

<?php
if (!file_exists('data.json')) {
    $images_data = [
        'pass' => '0043',
        'images' => []
    ];
    file_put_contents('data.json', json_encode($images_data));
}

require_once 'pages/photo.php';

//$stack = ["orange", "banana"];
//$stack[] = "orange";
//$stack[] = "raspberry";
//print_r($stack);
//
//$file_content = file_get_contents('data.json');
//$images_data = json_decode($file_content, true);
//
//print_r("<br><br>File: {$file_content}<br><br>");
//
//$count = count($images_data);
//
//$url_data = parse_url($images_data[0]['host']);
//
//print_r('Count: ' . $count . '<br>');
//print_r('SCHEME: ' . $url_data['scheme'] . '<br>');
//print_r('HOST: ' . $url_data['host'] . '<br>');
//print_r('PATH: ' . $url_data['path'] . '<br>');
//print_r('QUERY: ' . $url_data['query'] . '<br><br>');
//
//parse_str($url_data['query'], $query);
//
//
//print_r('WIDTH: ' . $images_data[0]['width'] . '<br>HEIGHT: ' . $images_data[0]['height'] . '<br><br>');
//
//$url_main =
//    $url_data['scheme'] . '://' . $url_data['host'] . $url_data['path'] . '?resid=' . urlencode($query['resid']) . '&authkey=' . urlencode($query['authkey']);
//
//print_r('URL: <br>' . $images_data[0]['host'] . '<br>');
//print_r($url_main);

?>


</body>

<script type="text/javascript">
    $(document).ready(function () {
        $('#add_image_btn').on('click', function () {
            console.log('host2: empty');

            let host = $("#host").val();
            console.log('host: ' + host);

            $.ajax({
                type: "GET",
                url: "save_image.php",
                data: {host: host},
                success: function () {
                    location.reload();
                }
            });
        });
    });
</script>

</html>