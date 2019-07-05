<?php
/*
 * 瀏覽目錄
 */

// @ -> 抑制(warning)訊息
// exit = die
date_default_timezone_set('Asia/Taipei');
$mydir = 'C:\Users\user\Desktop\axmpp\htdocs';
$fp = @opendir($mydir) or die('Server Busy');
$fp = @opendir($mydir) or exit('Server Busy');
// echo gettype($fp) . '<br>';
// var_dump($fp);

// 指標在移動，直到回傳false (此目錄沒物品)
// $str = readdir($fp);
// echo $str . '<br>';
// $str = readdir($fp);
// echo $str . '<br>';
// $str = readdir($fp);
// echo $str . '<br>';

// 讀取目錄檔案，直到回傳false (此目錄沒物品)
while($file = readdir($fp)){
    $len= filesize("{$mydir}/{$file}");
    $mtime = filemtime("{$mydir}/{$file}");  // 從上次修改到現在的修改時間 (UNIX顯示)，較精準
    $ntime = date('Y-m-d H:i:s', $mtime);
    echo "{$file} : {$len} : {$mtime} : {$ntime}<br>";
}

// 刪除檔案 (資源回收桶也不會有，命令列是沒有的)
// delete不砍，unlink砍
if(unlink("./test1.html")){
    echo 'Delete OK!';
}

?>