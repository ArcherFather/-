<?php
include_once 'sql.php';
// autoload
spl_autoload_register(function($class_name){
    require_once "{$class_name}.php";
});

if(!isset($_REQUEST['account'])) header('Location: login.php');

$account = $_REQUEST['account'];
$passwd = $_REQUEST['passwd'];

// $sql = "SELECT * FROM member WHERE account = '{$account}'"
// $result = $mysqli->query($sql);

$sql = "SELECT * FROM member WHERE account = ?";
$stmt = $mysqli->prepare($sql);// 準備執行，$stmt is a Object of mysqli_stmt
$stmt->bind_param('s', $account);
$stmt->execute();  // 執行
$result = $stmt->get_result();
if($result->num_rows > 0){
    // check password, now
    $member = $result->fetch_object();
    // var_dump($member);
    // echo $member->passwd;
    if(password_verify($passwd, $member->passwd)){
        echo 'Login Success<br>';
        echo 'Welcome! ' . $member->realname;
        session_start();
        $_SESSION['member'] = $member;
        $_SESSION['cart'] = new Cart;
        header('Location: main.php');
    }else{
        echo 'Login Fail';
        header('Location: login.php');
    }
}else{

}



?>