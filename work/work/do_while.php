<?php
// (前測)while可能跑0次，(後測)do-while保證至少一次

$i = 1;
do {
    echo $i . '<br>';
    $i++;
}while ($i < 10);

?>