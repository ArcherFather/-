<?php
// 表格
// 1~10
// 11~20
// ...
// 91~100
// 質數黃底
// 比到開根號就好了 sqrt(n)
?>
找質數

<table border='1' width='100%'>
    <?php
        define("ROWS",10);
        define("COLS",10);

        $number = 1;
        for($k = 0; $k < ROWS; $k++){
            echo '<tr>';
            for($j = 0; $j < COLS; $j++){
                // 判斷是否為質數
                $isPrime = true;
                for($i = 2; $i <= sqrt($number); $i++){
                    if($number % $i == 0){
                        $isPrime = false;
                        break;
                    }
                }

                // 如果為質數，標示黃底
                if($isPrime  && $number != 1){
                    echo '<td bgcolor="yellow">';
                }else{
                    echo '<td>';
                }
                echo "{$number}";
                echo '</td>';
                $number++;
            }
            echo '</tr>';
        }
    ?>
</table>