<?php
// (1)
function fx($x){
    return 2 * $x +1;
}

$var1 = fx(3);
echo $var1 . '<br>';

// (2)
function test1($var1){
    $var1 += 10;
    return $var1;
}

$var1 = 100;
test1($var1);
echo $var1 . '<br>';

$var1 = test1($var1);
echo $var1 . '<br>';

// (3) 傳址
function test2(&$var1){
    $var1 += 10;
}

$var1 = 100;
test2($var1);
echo $var1 . '<br>';