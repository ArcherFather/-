<?php
    $data = $_GET['data'];
    foreach($data as $key => $value){
        $$key = $value;  // $$ ->變數的變數
    }
?>

<h2 style='color: #00f; background-color: #ff0'><?php echo $title; ?></h1>
<hr />
Hello, <?php echo $who; ?>