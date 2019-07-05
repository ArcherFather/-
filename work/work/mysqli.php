<?php
// mysqli(IP位址, 帳號, 密碼, 資料庫)
$mysqli = new mysqli('localhost','root','','cy');
// var_dump($mysqli);
// 顯示為0,代表無錯誤
//echo $mysqli->connect_errno;
$mysqli->set_charset('utf8');

// 新增資料
// $sql = 'INSERT INTO cust (cname,tel,birthday) VALUES ("brad","123","1999-01-02")';
// $sql .= ', ("cy1","321","1999-01-05")';
// $sql .= ', ("cy2","1321","1999-03-05")';

// 更新資料
// $sql = 'UPDATE cust SET cname = "Tony" WHERE id="3"';

// 刪除資料
// $sql = 'DELETE FROM cust WHERE id="2"';

// $stmt = $mysqli->prepare($sql);// 準備執行，$stmt is a Object of mysqli_stmt

// 解決隱碼攻擊的方法
$sql = 'INSERT INTO cust (cname,tel,birthday) VALUES (?,?,?)';
$cname = 'Ada';
$tel = '0923-345678';
$birthday = '2006-06-23';

$stmt = $mysqli->prepare($sql);// 準備執行，$stmt is a Object of mysqli_stmt
$stmt->bind_param('sss', $cname, $tel, $birthday);  // sss ->代表有三個字串(string)，'少一個都會錯，且一定要帶變數

$stmt->execute();  // 執行
echo $stmt->affected_rows;
// echo $mysqli->error;