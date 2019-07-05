<?php

sayYa();sayYa();
sayHello('Tony');
sayHello('Archer');
sayHelloV2();
sayHelloV2(2,'Saber1');
// 以下為錯誤範例
sayHelloV2('4Saber2');
sayHelloV2('Saber3');
sayHelloV3('Mary');
sayHelloV3(array('Tony','Dad','Mom'));

sayHelloV4();
sayHelloV4('Mary');
sayHelloV4('Mary',true,3,4);


function sayYa(){
    echo 'Ya<br>';
}

function sayHello($name){
    echo "Hello, {$name}<br>";
}

// 含預設值 (有預設值之項目應擺最後)
function sayHelloV2($n = 1, $name = 'World'){
    for($i=0;$i<$n;$i++){
        echo "Hello, {$name}<br>";
    }
}

function sayHelloV3($name = 'World'){
    if(is_array($name)){
        foreach($name as $n){
            echo "Hello, {$n}<br>";
        }
    }else{
        echo "Hello, {$name}<br>";
    }
}

function sayHelloV4(){
    // 印出有幾個帶入參數
    $names = func_num_args();
    echo $names . "<br>";

    // 進來再處理參數
    $names = func_get_args();
    foreach($names as $n){
        echo "Hello, {$n}<br>";
    }
}