<?php
    // include_once 'MyClass1.php';
    // include_once 'MyClass2.php';

    // autoload->自動讀取類別
    // 如果發現有呼叫不認識(沒include)的類別名稱，會自動去呼叫 (我們設定認檔案名字，所以檔案命名很重要)
    spl_autoload_register(function($class_name){
        require_once "{$class_name}.php";
    });

    $obj1 = new MyClass1;
    $obj1->showMe();
    $obj2 = new MyClass2;
    $obj2->showMe();

    // 測試
    $c1 = new Cart;
    $c1->addProduct('P001',30);
    $c1->addProduct('P002',2);
    $myList = $c1->getList();
    var_dump($myList);

?>