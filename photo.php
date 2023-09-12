<?php
$scale = 300;

$sizeDetails = @getimagesize( "public/img/image00000.jpg" );
$width0 = $sizeDetails[ 0 ] * $scale / $sizeDetails[ 0 ];
$heigh0 = $sizeDetails[ 1 ] * $scale / $sizeDetails[ 0 ];

$sizeDetails = @getimagesize( "public/img/image00001.jpg" );
$width1 = $sizeDetails[ 0 ] * $scale / $sizeDetails[ 0 ];
$heigh1 = $sizeDetails[ 1 ] * $scale / $sizeDetails[ 0 ];

//echo $sizeDetails[ 0 ], ' / ', $sizeDetails[ 1 ], ' / ', $sizeDetails[ 2 ];

?>
<center>
	<img src="public/img/image00000.jpg" alt="image00000" width="<?= $width0 ?>" height="<?= $heigh0 ?>">
	<img src="public/img/image00001.jpg" alt="image00000" width="<?= $width1 ?>" height="<?= $heigh1 ?>">
</center>
