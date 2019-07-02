<?php
// 表格
// 1~10
// 11~20
// ...
// 91~100

// 質數黃底

// 比到開根號就好了 sqrt(n)

$n = 24;
$isPrime = true;
for($i = 2; $i <= sqrt($n); $i++){
    if($n % $i == 0){
        $isPrime = false;
        break;
    }
}

echo $isPrime?'OK':'XX';

?>

<table border='1' width='100%'>
    <?php
        define("ROWS",2);
        define("FROM",2);
        define("TO",5);

        for($k = 0; $k < ROWS; $k++){
            echo '<tr>';
            for($j = FROM; $j <= TO; $j++){

                echo ((TO - FROM +1) % 2 == 0 && ROWS % 2 == 0)?'<td bgcolor="pink">':'<td bgcolor="yellow">';

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