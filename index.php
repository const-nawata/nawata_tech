<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Nawata</title>
    <link rel="stylesheet" href="public/css/main.css" type="text/css"/>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<body>
<div class="site-title">Our Photos&nbsp;&nbsp;&nbsp;<button type="button" id="add_image_btn">
        Додати
    </button>
</div>

<?php
require_once 'pages/photo.php';

$json_val = json_encode([
    'posts' => 'posts',
    'int' => 15,
    'dbl' => 58.525,
]);

file_put_contents('images.json', json_encode($json_val));


?>


</body>


<script type="text/javascript">

    let ss = 0;


    $(document).ready(function () {

        $('#add_image_btn').on('click', function () {
            console.log('SS value is ' + ss)
            ss++;

            // var order = {
            //     name: $('#name').val(),
            //     grade: $('#grade').val(),
            // }
            // $.ajax({
            //     type: 'POST',
            //     url: 'json.php',
            //     data: order,
            //     success: function (newStudent) {
            //         console.log("Success");
            //         $("#students").append(setStudents($('#name').val(), $('#grade').val()));
            //
            //     }
            // })
        });
    });
</script>

</html>