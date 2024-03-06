<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Nawata</title>
    <link rel="stylesheet" href="public/css/main.css" type="text/css"/>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<body>
<div class="site-title">Our Photos&nbsp;&nbsp;&nbsp;


</div>

<div class="image-host">
    <label for="host">HOST</label>
    <input type="text" id="host" name="host" size="50">
    <button type="button" id="add_image_btn">Додати</button>
</div>


<?php
require_once 'pages/photo.php';

$fl_cont = file_get_contents('images.json');
$data_s = json_decode($fl_cont);
$data_s2 = json_decode($data_s, true);

print_r('File: ' . $fl_cont);
print_r('<br>');
print_r('JSON: ' . $data_s2['host']);
?>


</body>

<script type="text/javascript">
    $(document).ready(function () {
        $('#add_image_btn').on('click', function () {
            console.log('host2: empty');

            let host = document.getElementById("host").value;

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