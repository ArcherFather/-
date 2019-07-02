<?php
echo count($_SERVER);
echo '<hr>';
foreach($_SERVER as $key => $value){
    echo "{$key} => {$value}<br>";
}
?>