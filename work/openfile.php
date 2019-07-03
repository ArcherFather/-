<?php
/*
 * fgetc -> 取得一個字元
 */
// 開啟串流
// r -> read, w-> write, a -> append
$fp = @fopen('./dir1/file1.txt', 'r');
//var_dump($fp);
while($c = fgetc($fp)){
    // nl2br() -> 讀取換列符號
    echo nl2br($c);
}

// 結束串流
fclose($fp);

/*
 * fgets -> 取得一整列 
 * 開啟網站原始碼
 */
$fp = @fopen('https://www.php.net/manual/en/function.fgets.php', 'r');

$i = 1;
while($line = fgets($fp)){
    // nl2br() -> 讀取換列符號
    echo "{$i} => {$line}<br>";
    $i++;
}

fclose($fp);

/*
 * fopen可以開啟網站原始碼
 * 篩選字串 (類似爬蟲)
 */
$fp = @fopen('https://www.php.net/manual/en/function.fgets.php', 'r');

$i = 1;
while($line = fgets($fp)){
    if(preg_match('/a href/',$line))
    // nl2br() -> 讀取換列符號
    echo "{$i} => {$line}<br>";
    $i++;
}

fclose($fp);