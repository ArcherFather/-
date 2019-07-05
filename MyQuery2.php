<?php
include_once 'sql.php';
spl_autoload_register(function($class_name){
    require_once "{$class_name}.php";
});

$myquery = new MyQuery($mysqli);
$var1 = $myquery->getField(12, MyQuery::QUERY_PNAME);
$var2 = $myquery->getField(12, MyQuery::QUERY_PRICE);
echo $var1 . ":" . $var2;