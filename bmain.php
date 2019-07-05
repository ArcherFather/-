<?php
    include_once 'sql.php';

    // 商品複製功能
    if(isset($_REQUEST['cloneid'])){
        $cloneid = $_REQUEST['cloneid'];
        $sql = "INSERT INTO product (pname,price) " .
            "SELECT pname,price FROM product WHERE id = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('i', $cloneid);
        $stmt->execute();
        // echo $stmt->error;  // 沒有clone，看錯誤訊息
    }else if(isset($_REQUEST['delid'])){ // 商品刪除功能
        $delid = $_REQUEST['delid'];
        $sql = "DELETE FROM product WHERE id = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('i', $delid);
        $stmt->execute();
    }

    // 商品分頁顯示
    $rpp = 4;  // row per page
    $page = isset($_GET['page'])? $_GET['page'] : 1;  // $page : 顯示頁數
    if($page < 1) $page = 1;
    $start = ($page-1) * $rpp;
    $sql = "SELECT * FROM product LIMIT {$start}, {$rpp}";
    $result = $mysqli->query($sql);

?>

<script>
    // 是否要刪除
    function confirmDelete(pname){
        return confirm('Do you want to delete ' + pname + '?');
    }

</script>

<a href='addProduct.php'>Add New Product</a>
<table border="1" width="100%">
    <tr>
        <th>id</th>
        <th>pname</th>
        <th>price</th>
        <th>Edit / Delete / Clone</th>
    </tr>
    <?php 
        while($product = $result->fetch_object()){
            echo '<tr>';
            echo "<td>{$product->id}</td>";
            echo "<td><a href='showPimage.php?id={$product->id}'>{$product->pname}</a></td>";
            echo "<td>{$product->price}</td>";
            echo "<td>";
            echo "<a href='editProduct.php?editid={$product->id}'>Edit</a> | ";
            // 加\引號->保持雙引號的意義,不被前一個雙引號影響
            echo "<a href='?delid={$product->id}' onclick='return confirmDelete(\"{$product->pname}\");'>Delete</a> | ";
            echo "<a href='?cloneid={$product->id}'>Clone</a>";
            echo "</td>";
            echo '</tr>';
        }
    ?>
</table>

<button type="button" onclick="location.href='bmain.php?page=<?php echo $page-1?>'">上一頁<br>
<button type="button" onclick="location.href='bmain.php?page=<?php echo $page+1?>'">下一頁<br>