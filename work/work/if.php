<?php
    $score = rand(0,100);
    echo $score . "<br>";

    if ($score >= 90){
        echo 'A';
    }else if ($score >= 80){
        echo 'B';
    }else if ($score >= 70){
        echo 'C';
    }else if ($score >= 60){
        echo 'D';
    }else{
        echo 'E';
    }

    echo "<hr>";

    $year = rand(0,2100);
    $year = 1602;
    echo $year . "<br>";

    if($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0)){
        echo '閏年';
    }else{
        echo '非閏年';
    }