<?php
/*
 * 建立文字檔案
 */
if(!isset($_REQUEST['filename'])) die('get out here!');
$filename = $_REQUEST['filename'];
$content = $_REQUEST['content'];
$fp = @fopen("./dir1/{$filename}", 'w');
if(@fwrite($fp, $content)){
    // header前面絕對不能有輸出，因body裡有東西，設立Header導轉變無意義
    header("Location: dir1/{$filename}");
}else{
    echo 'write error!';
}
fflush($fp);
fclose($fp);
