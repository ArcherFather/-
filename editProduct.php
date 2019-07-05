<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php
include_once 'sql.php';

if(isset($_REQUEST['editid'])){
    // edit mode
    // query data
    $editid = $_REQUEST['editid'];
    $sql = "SELECT * FROM product WHERE id = {$editid}";
    $result = $mysqli->query($sql);
    $product = $result->fetch_object();
}else if (isset($_REQUEST['pname'])){
    // update mode
    $updateid = $_REQUEST['updateid'];
    $pname = $_REQUEST['pname'];
    $price = $_REQUEST['price'];
    $sql = "UPDATE product SET pname='{$pname}', price={$price} WHERE id = {$updateid}";
    $mysqli->query($sql);
    header('Location: bmain.php');
}
?>

Edit Product <hr />
<form method='post' action='editProduct.php' enctype='multipart/form-data'>
    <input type='hidden' name='updateid' value='<?php echo $product->id ?>' />
    PName: <input type='text' name='pname' value='<?php echo $product->pname ?>' /><br>
    Price: <input type='number' name='price' value='<?php echo $product->price ?>' /><br>
    <input type='submit' name='Update' /><br>
</form>