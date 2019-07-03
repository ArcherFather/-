<?php
    $row = $col = '';
    if(isset($_GET['row']) && isset($_GET['col'])) {
        $row = $_GET['row'];
        $col = $_GET['col'];
    }
?>

乘法表 (表格粉黃相間)
<form action="hw3.php" method="GET">
    <input type="number" name="row" value=<?php echo $row;?> />列 
    <input type="number" name="col" value=<?php echo $col;?> />行
    <input type= 'submit' value='確定'>
</form>

<table border='1' width='100%'>
    <?php
        for($k = 0; $k < $row; $k++){
            echo '<tr>';
            for($i = 1+($col*$k); $i < 1+($col*$k)+$col; $i++){
                // 判斷格子顏色應為黃還是粉 (梅花座)
                if($col % 2 == 1){
                    echo ($i % 2 == 0)?'<td bgcolor="pink">':'<td bgcolor="yellow">';
                }else{
                    if($k % 2 == 0){
                        echo ($i % 2 == 0)?'<td bgcolor="pink">':'<td bgcolor="yellow">';
                    }else{
                        echo ($i % 2 == 1)?'<td bgcolor="pink">':'<td bgcolor="yellow">';
                    }
                }

                // 印出九九乘法
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
