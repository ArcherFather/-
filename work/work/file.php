<?php
$conrent = file('./dir1/file1.txt');
var_dump($conrent);  // 蘭換行符號

foreach($conrent as $line){
    echo $line . '<br>';
}