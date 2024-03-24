<div style="text-align: center;" onclick="show('expandedImg')">
    <?php
    $file_content = file_get_contents('data.json');
    $data = json_decode($file_content, true);
    $images_data = $data['images'];
    $count = count($images_data);

    for ($i = 0; $i < $count; $i++) {
        $url =
            $images_data[$i]['scheme'] . '://' . $images_data[$i]['host'] . $images_data[$i]['path'] . '?resid=' .
            $images_data[$i]['resid'] . '&authkey=' . $images_data[$i]['authkey'] . '&width=300';
        ?>
        <img src="<?= $url ?>" alt="image00000" width="300">
        <?php
    }
    ?>
</div>

<?php
/*
?>

<div style="text-align: center;">
    <img src="https://onedrive.live.com/embed?resid=E56760D01EE8AF8D%21407712&authkey=%21ADJwf_qNiN5H5_c&width=660"
         alt="image00000" width="300">

    <img src="https://onedrive.live.com/embed?resid=E56760D01EE8AF8D%21407713&authkey=%21AP6OiZxl8HhC6oE&width=660"
         alt="image00001" width="300">

    <img src="https://onedrive.live.com/embed?resid=E56760D01EE8AF8D%21407714&authkey=%21AJjf-FrqT5iTFfc&width=660"
         alt="Нещастя" width="300"">
</div>

<?php
*/
?>

