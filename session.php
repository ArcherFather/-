<?php
include_once 'oop2.php';

// 啟動session
session_start();
$var1 = new Student(90,87,50);
$_SESSION['var1'] = $var1;
$sum = $var1->sum();
$avg = $var1->avg();
echo "Sum: {$sum}; Avg: {$avg}<br>"
?>
<a href='session_reaction.php'>Next Page</a>