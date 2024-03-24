<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Nawata</title>
    <link rel="stylesheet" href="public/css/main.css" type="text/css"/>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
<div class="site-title">Наші фотки</div>

<?php

if (!file_exists('data.json')) {
    $images_data = [
        'pass' => '0043',
        'images' => []
    ];
    file_put_contents('data.json', json_encode($images_data));
}

$file_content = file_get_contents('data.json');
$data = json_decode($file_content, true);

if (array_key_exists('pass', $_GET) && $_GET['pass'] == $data['pass']) {
    ?>
    <div class="image-host">
        <label for="host">HOST</label>
        <input type="text" id="host" name="host" size="90" value="">
        <button type="button" id="add_image_btn">Додати</button>
    </div>

    <div class="photo-exists" id="div_err">&nbsp;</div>

    <?php
} else {
    ?>
    <div class="image-host"></div>
    <?php
}

require_once 'pages/photo.php';
?>

<!-- This is what will be included inside the expandedDiv popup -->
<div class="expandedDiv" id="expandedDiv">
    <img src="https://onedrive.live.com/embed?resid=E56760D01EE8AF8D%21407712&authkey=%21ADJwf_qNiN5H5_c&width=1024"
         alt="image00000" width="1024" id="expandedImg">

    <br/><br/>
    <a href="#" onclick="hideExpanded()">Close</a>
</div>

</body>

<script type="text/javascript">
    jgt = function (id) {
        return document.getElementById(id);
    }
    let showExpanded = function () {
        jgt("expandedDiv").style.display = 'block';
    }
    let hideExpanded = function () {
        jgt("expandedDiv").style.display = 'none';
    }


    $(document).ready(function () {
        $('#add_image_btn').on('click', function () {
            let host = $("#host").val();
            // console.log('host: ' + host);

            $.ajax({
                type: "GET",
                url: "save_image.php",
                data: {host: host},
                success: function (data) {
                    if (data.result) {
                        $("#div_err").html("&nbsp;");
                        $("#host").val("");
                        location.reload();
                    } else {
                        $("#div_err").html("Таке фото вже є");
                        $("#host").val("");
                    }
                },
                error: function (msg) {
                    $("#div_err").html(msg);
                    console.log(msg);
                }
            });
        });
    });

</script>

</html>