<?php
    // 圖形驗證器
    $img = ImageCreateTrueColor(400, 80);
    $black = ImageColorAllocate($img, 0, 0, 0);
    $white = ImageColorAllocate($img, 255, 255, 255);
    imagefilledrectangle($img, 0, 0, 400, 80, $black);
    $font = "C:\Users\user\Desktop\RussoOne-Regular.ttf";

    // 亂數產生數字
    for($i=0;$i<6;$i++){
        $rand_word = rand(0,9);
        $wordx = 36+$i*60;
        imagettftext($img, 30, rand(-30,30), $wordx , 50, $white, $font, $rand_word);
    }
    
    // 產生雜訊
    for( $i=0; $i< 800; $i++ ){
        imagesetpixel($img, rand(0,400), rand(0,80), $white);
    }

    header("Content-type: image/png");
    Imagepng($img);
    ImageDestroy($img);