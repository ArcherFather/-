<?php

// 尋找是否包含字串
$mystr = 'abc';
$findme = 'a';

echo strpos($mystr, $findme) . '<br>';
$pos = strpos($mystr, $findme);
if($pos === true){
    echo 'find it';
}else{
    echo 'Not find it';
}