<?php

// 撲克牌 洗牌+發牌
$poker = range(0,51);
shuffle($poker); 

foreach($poker as $value){
    echo $value . '<br>';
}
echo '<hr>';

$players = [[],[],[],[]];
foreach($poker as $i => $card){
    $players[$i%4][(int)($i/4)] = $card;
}

// foreach($players[1] as $card){
//     echo $card . '<br>';
// }
?>


<table border='1' width='100%'>
    <?php
    $suits = array("&spades;","<font color='red'>&hearts;</font>","<font color='red'>&diams;</font>","&clubs;");
    $values = array('A',2,3,4,5,6,7,8,9,10,'J','Q','K');
        foreach($players as $player){
            sort($player);
            echo '<tr>';
            foreach($player as $card){
                echo "<td>";
                $color = (int) ($card/13);
                $number = $card%13;
                echo "{$suits[$color]} {$values[$number]}";
                echo "</td>";
            }
            echo '</tr>';
        }
    ?>
</table>