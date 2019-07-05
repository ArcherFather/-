<?php
    /*
    * 重新調整圖片大小 (等比例縮放)
    */
    $dstW = 240; $dstH =240;

    // 原圖
    $src = ImageCreateFromJpeg("dir1/L.jpg");
    $srcW = ImageSX($src);  $srcH = ImageSY($src); 

    if($srcW > $srcH){
        $dstX = $dstW;
        $dstY = ($srcH/$srcW)*$dstH;
    }else{
        $dstY = $dstH;
        $dstX = ($srcW/$srcH)*$dstW;
    }

    $dst = ImageCreate($dstX, $dstY);
    // imagecopyresampled($dst, $src,
    // 0, 0,
    // 0, 0,
    // $dstX, $dstY,
    // $srcW, $srcH);

    ImageCopyResized($dst, $src,
    0, 0,
    0, 0,
    $dstX, $dstY,
    $srcW, $srcH);

    header("Content-type: image/jpeg");
    // 顯示圖
    Imagepng($dst);
    // 存圖
    //Imagepng($dst, "dir1/newImage.png");

    ImageDestroy($src);
    ImageDestroy($dst);
?>