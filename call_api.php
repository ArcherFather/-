<?php
    include_once 'api.php';

    $twid = 'A123456789';
    if(isTWId($twid)){
        echo '身分證符合格式<br>';
    }else{
        echo '身分證不符格式<br>';
    }

    $twid = createTWId();
    echo $twid;
?>