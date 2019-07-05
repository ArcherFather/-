<?php
// 1. canvas (new)
// 2. process
// 3. output => 1. display or 2. export to file
// 4. free memory
// 畫布功能

// $rate = 83;  // 血條%數
$rate = $_GET['rate'];  // 血條%數

$img = ImageCreateTrueColor(400, 20);

$yellow = imagecolorallocate($img, 255, 255, 0);  // 調色盤
$red = imagecolorallocate($img, 255, 0, 0);  // 調色盤
$black = imagecolorallocate($img, 0, 0, 0);  // 調色盤
imagefilledrectangle($img, 0, 0, 400, 20, $yellow);
imagefilledrectangle($img, 0, 0, (400*($rate/100)), 20, $red);
imagestring($img, 3, (400*($rate/100)+5), 0, "{$rate}%", $black);
// imageline() 畫線圖

header("Content-type: image/jpeg");
imagejpeg($img);

ImageDestroy($img);
