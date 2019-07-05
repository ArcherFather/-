<?php

// for(第一次會跑(初始化);條件;執行完內容會跑(每一圈))
$i = 0;
for(printBrad(); $i < 10; printLine()){
    echo "{$i}<br>";
    $i++;
}

function printBrad() {
    echo 'Brad<br>';
}

function printLine() {
    echo '<hr>';
}

?>