<?php
    // $_REQUEST 能接收 post 和 get
    foreach($_REQUEST as $k => $v){
        if(is_array($v)){
            foreach($v as $k => $v){
                echo "{$k} : {$v}<br>";
            }
        }else{
            echo "{$k} => {$v}<br>";
        }
    }

?>