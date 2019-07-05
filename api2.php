<?php
// if(isset($_POST['name']) && isset($_POST['age'])){
//     $name = $_POST['name'];
//     $age = $_POST['age'];
//     $obj = new stdClass;
//     $obj->name = $name; $obj->age = $age;
//     $ret = json_encode($obj);

//     $obj = json_decode($ret);

//     echo $ret . '<br>';
//     echo $obj->name . " : " . $obj->age ;
// }
include_once 'sql.php';

$ret = new stdClass;
$ret->code = '';
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $sql = "SELECT * FROM product WHERE id = {$id}";
    $result = $mysqli->query($sql);
    if($result->num_rows > 0){
        $product = $result->fetch_object();
        $ret->code = '200';
        $ret->product = $product;
    }else{
        $ret->code = "404";
    }
}else{
    $ret->code = "500";
}

echo json_encode($ret);