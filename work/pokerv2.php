<?php

// 撲克牌 洗牌+發牌
$poker = [];
for($i=0; $i<52; $i++){
    $rand = rand(0,51);

    do{
        $rand = rand(0,51);

        // 檢查機制 : 判斷是否有重複出現
        $isRepeat = false;
        for($j=0; $j<$i; $j++){
            if($rand == $poker[$j]){
                $isRepeat = true;
                break;
            }
        }
    }while($isRepeat);

    $poker[$i] = $rand;
    echo $poker[$i] . '<br>';
}