<?php
    $passwd = '123456';
    $passwd1 = password_hash($passwd, PASSWORD_DEFAULT);
    echo $passwd1 . '<br>';
    echo strlen($passwd1);
    echo '<hr>';

    $passwd2 = '123456';
    if(password_verify($passwd2,$passwd1)){
        echo 'OK';
    }else{
        echo 'XX';
    }