<?php

function test1(){
    // global意思 => 這個v就是外面那個v
    // 不建議使用
    global $v
    $v += 7;
}

$v =100;
test1();
test1();
test1();
test1();
echo $v;