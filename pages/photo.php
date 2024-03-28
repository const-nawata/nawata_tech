<div class="ourImages">


    <?php
    $file_content = file_get_contents('data.json');
    $data = json_decode($file_content, true);
    $images_data = $data['images'];
    $count = count($images_data);

    // &#x2421;

    for ($i = 0; $i < $count; $i++) {
        $url =
            $images_data[$i]['scheme'] . '://' . $images_data[$i]['host'] . $images_data[$i]['path'] . '?resid=' .
            $images_data[$i]['resid'] . '&authkey=' . $images_data[$i]['authkey'] . '&width=300';
        ?>
        <div class="container">
            <div class="tag">&#9747;</div>
            <img src="<?= $url ?>" alt="image00000" width="300" class="imgItem">
        </div>
        <?php
    }
    ?>
</div>

