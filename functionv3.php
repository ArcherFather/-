<?php
// (1) 冒號宣告型別 (php7之後才有)
function test1($x, $y) : string {
    return $x / $y;
}

$v = test1(10, 3);
var_dump($v);
