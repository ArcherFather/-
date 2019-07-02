<?php
    $x = $_GET['x'];
    echo '$x 型態 : ' . gettype($x) . "<br>";
    $y = $_GET['y'];
    echo '$y 型態 : ' . gettype($y) . "<br>";
    $result =  $x + $y;
    echo $x . '+' . $y .'=' .  $result;
?>