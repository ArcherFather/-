<?php
spl_autoload_register(function($class_name){
    require_once "{$class_name}.php";
});
session_start();
if (!isset($_SESSION['member'])) header('Location: login.php');
$member = $_SESSION['member']; $cart = $_SESSION['cart'];
$icon = base64_encode($member->icon);

?>
<h1>CY Super Big Company</h1>
<hr />
Welcome, <?php echo $member->realname; ?><br>
<img src='data:image/jpeg;base64, <?php echo $icon; ?>' /><br>
<a href='logout.php'>Logout</a><br>
Product List :



<hr />
2019 Copyright. Power By CY corp.