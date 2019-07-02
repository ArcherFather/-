<?php
/*
* 數字累計加總
*/
    $iInput = '';
    if(isset($_GET['n'])){
        $iInput = $_GET['n'];
        $iResult = 0;
        $i = 1;
        while($i <= $iInput){
            $iResult += $i++;
        }
    }
?>

數字累計加總
<form action="while.php">
    1 + 2 + ... + 
    <input type="number" name="n" value=<?php echo $iInput;?>>
    <input type="submit" name="=" value='='>
    <?php
        if(isset($iResult))
            echo $iResult;
    ?>
</form>