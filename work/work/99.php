<?php

    // for($i = 1; $i < 10; $i++){
    //     for($j = 1; $j < 10; $j++){
    //         $result = $i * $j;
    //         echo "{$i} x {$j} = {$result}<br>";
    //     }
    // }

    // 三源運算式
    $a = 7;
    echo ($a % 2 == 0)?'pink':'yellow';

?>

<table border='1' width='100%'>
    <?php
        define("ROWS1",3);
        define("COL1",3);

        for($k = 0; $k < ROWS1; $k++){
            echo '<tr>';
            for($i = 1+(COL1*$k); $i < 1+(COL1*$k)+COL1; $i++){
                echo '<td>';
                for($j = 1; $j < 10; $j++){
                    $result = $i * $j;
                    echo "{$i} x {$j} = {$result}<br>";
                }
                echo '</td>';
            }
            echo '</tr>';
        }
    ?>
</table>


<table border='1' width='100%'>
    <?php
        define("ROWS",3);
        define("FROM",1);
        define("TO",3);

        for($k = 0; $k < ROWS; $k++){
            echo '<tr>';
            for($j = FROM; $j <= TO; $j++){

                echo ($j % 2 == 0)?'<td bgcolor="pink">':'<td bgcolor="yellow">';

                $newj = $j + (TO - FROM +1) * $k;
                for($i = 1; $i <= 9; $i++){
                    $r = $newj * $i;
                    echo "{$newj} x {$i} = {$r}<br>";
                }
                echo '</td>';
            }
            echo '</tr>';
        }
    ?>
</table>