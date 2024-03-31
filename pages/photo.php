<div class="ourImages">
    <?php
    global $is_admin;

    $file_content = file_get_contents('data.json');
    $data = json_decode($file_content, true);
    $images_data = $data['images'];
    $count = count($images_data);

    for ($i = 0; $i < $count; $i++) {
        $url =
            $images_data[$i]['scheme'] . '://' . $images_data[$i]['host'] . $images_data[$i]['path'] . '?resid=' .
            $images_data[$i]['resid'] . '&authkey=' . $images_data[$i]['authkey'] . '&width=300';

        if ($is_admin) {
            ?>
            <div class="del-left-part">
                <div class="del-btn" id="img<?= $i ?>">&#10006;</div>
                <?php
                createImage($url);
                ?>
            </div>
            <?php
        } else {
            createImage($url);
        }
    }
    ?>
</div>
<?php

function createImage($url)
{
    ?>
    <img src="<?= $url ?>" alt="image00000" width="300" class="imgItem">
    <?php
}