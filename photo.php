<?php
$scale = 300;

//$sizeDetails = @getimagesize( "public/img/image00000.jpg" );
$sizeDetails = @getimagesize("https://onedrive.live.com/embed?resid=E56760D01EE8AF8D%21407712&authkey=%21ADJwf_qNiN5H5_c&width=2048&height=1367");
$width0 = $sizeDetails[0] * $scale / $sizeDetails[0];
$heigh0 = $sizeDetails[1] * $scale / $sizeDetails[0];

//$sizeDetails = @getimagesize( "public/img/image00001.jpg" );
$sizeDetails = @getimagesize("https://onedrive.live.com/embed?resid=E56760D01EE8AF8D%21407713&authkey=%21AP6OiZxl8HhC6oE&width=4836&height=3228");
$width1 = $sizeDetails[0] * $scale / $sizeDetails[0];
$heigh1 = $sizeDetails[1] * $scale / $sizeDetails[0];

$sizeDetails = @getimagesize("https://onedrive.live.com/embed?resid=E56760D01EE8AF8D%21407714&authkey=%21AJjf-FrqT5iTFfc&width=4836&height=3228");
$width2 = $sizeDetails[0] * $scale / $sizeDetails[0];
$heigh2 = $sizeDetails[1] * $scale / $sizeDetails[0];


//echo $sizeDetails[ 0 ], ' / ', $sizeDetails[ 1 ], ' / ', $sizeDetails[ 2 ];
//https://photos.onedrive.com/share/E56760D01EE8AF8D!407145?cid=E56760D01EE8AF8D&resId=E56760D01EE8AF8D!407145&authkey=!APC2Mo_ffrvHpaY&ithint=photo&e=JIJle7


?>
<div style="text-align: center;">
    <img src="https://onedrive.live.com/embed?resid=E56760D01EE8AF8D%21407712&authkey=%21ADJwf_qNiN5H5_c&width=2048&height=1367"
         alt="image00000" width="<?= $width0 ?>" height="<?= $heigh0 ?>">
    <img src="https://onedrive.live.com/embed?resid=E56760D01EE8AF8D%21407713&authkey=%21AP6OiZxl8HhC6oE&width=4836&height=3228"
         alt="image00001" width="<?= $width1 ?>" height="<?= $heigh1 ?>">
    <img src="https://onedrive.live.com/embed?resid=E56760D01EE8AF8D%21407714&authkey=%21AJjf-FrqT5iTFfc&width=4836&height=3228"
         alt="Нещастя" width="<?= $width2 ?>" height="<?= $heigh2 ?>">
</div>
