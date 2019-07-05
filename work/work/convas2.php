<?php 
$img = imagecreatefrompng("dir1/cat.png");
//$img = imagecreatetruecolor(400, 30);
$black = ImageColorAllocate($img, 0, 0, 0);
$font = "C:\Users\user\Desktop\RussoOne-Regular.ttf";
$word = "Hello, World";
imagettftext($img, 36, rand(-30,30), 150, 200, $black, $font, $word);

header("Content-type: image/png");
Imagepng($img);


ImageDestroy($img);