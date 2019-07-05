<?php
    include_once 'oop2.php';
    session_start();
    if(!isset($_SESSION['var1']))
        header('Location: session.php');
    $var1 = $_SESSION['var1'];
    echo "Sum: {$var1->sum()}; Avg: {$var1->avg()}<br>";
?>