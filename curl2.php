<?php
    // $ch = curl_init("https://www.bradchao.com/apptest/posttest1.php");
    // $ch = curl_init("127.0.0.1/work/api2.php");
    // $dataString = "name=Brad&age=18";
    
    $ch = curl_init("127.0.0.1/work/api2.php");
    $dataString = "id=12";

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

    $ret = curl_exec($ch);
    curl_close($ch);

    echo $ret . "<br>";

    $ret = json_decode($ret);
    if($ret->code == '200'){
        echo $ret->product->pname . " : " . $ret->product->price;
    }