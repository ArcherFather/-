<?php 
// 撲克牌交換原理 洗牌+發牌   迴圈52次
$poker = range(0,51);

// 亂數洗牌
for($i=0; $i<52; $i++){
    $rand = array_rand($poker);
    $aGetpoker[$i] = $poker[$rand];
    unset($poker[$rand]);
}

// 發牌給四位玩家
$players = [[],[],[],[]];
foreach($aGetpoker as $i => $card){
    $players[$i%4][(int)($i/4)] = $card;
}

?>
撲克牌 洗牌+發牌
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