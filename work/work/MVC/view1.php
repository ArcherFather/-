<?php
    $data = $_GET['data'];
    foreach($data as $key => $value){
        $$key = $value;  // $$ ->變數的變數
    }
?>

<h1><?php echo $title; ?></h1>
<hr />
Hello, <?php echo $who; ?>
<hr />
copyleft Brad.  \(^q^)/