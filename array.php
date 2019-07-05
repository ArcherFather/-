<?php
// 陣列特性
$a = [];
var_dump($a);
$a[] = 1;
$a[] = 'Brad';
$a[] = true;
$a[] = 12.3;
var_dump($a);
echo count($a) . '<br>';
$a[10] = 12; $a[1] = 'Eric';
var_dump($a);
// 跟js不一樣，PHP中間不會有null值，Ex : 五個元素 1 2 3 4 10
$a[] = 123;
var_dump($a);
echo '<hr>';
$b = array(1,2,3,4,5,6);
var_dump($b);
echo '<br>';
$b = array(4 => 1,2,17 => 3,4,5,6);
var_dump($b);
echo '<hr>';

// 尋訪陣列
$a = array(1,2,3,7 => 4,5,6,'Brad',12.3);

// 會有NOTICE
for($i = 0; $i<=11; $i++){
    echo $a[$i] . '<br>';
}

foreach ($a as $value){
    echo $value . '<br>';
}

foreach ($a as $key => $value){
    echo $key . ' => ' .$value . '<br>';
}
echo '<hr>';

// pratice 擲骰子
// 不用array
$a1 = $a2 = $a3 = $a4 = $a5 = $a6 = 0;
for($i = 0; $i < 100; $i++){
    $r = rand(1,6);
    if($r == 1){
        $a1++;
    }else if($r == 2){
        $a2++;
    }else if($r == 3){
        $a3++;
    }else if($r == 4){
        $a4++;
    }else if($r == 5){
        $a5++;
    }else if($r == 6){
        $a6++;
    }

    // switch($r){
    //     case 1: $a1++; break;
    //     case 2: $a2++; break;
    //     case 3: $a3++; break;
    //     case 4: $a4++; break;
    //     case 5: $a5++; break;
    //     case 6: $a6++; break;
    // }
}
echo "骰100次 (不用array)<br>";
echo "骰出1 : {$a1}次<br>";
echo "骰出2 : {$a2}次<br>";
echo "骰出3 : {$a3}次<br>";
echo "骰出4 : {$a4}次<br>";
echo "骰出5 : {$a5}次<br>";
echo "骰出6 : {$a6}次<hr>";

// 用array
// $p[出現點數] = 出現次數
$p = array(1 => 0,0,0,0,0,0);   // $p[1] = 0, $p[2] = 0, ... , $p[6] = 0,
for($i = 0; $i < 100000; $i++){
    $point = rand(1,9);
    $p[$point>6?$point-3:$point]++;
}
echo "骰100次 (用array)<br>";
for($i = 1; $i <= 6; $i++){
    echo "骰出{$i} : {$p[$i]}次<br>";
}
echo "foreach顯示<br>";
foreach($p as $key => $value){
    echo "骰出{$key} : {$value}次<br>";
}
echo '<hr>';



?>