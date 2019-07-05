<?php
/*
 * fgetc -> 取得一個字元
 */
// r+可讀可寫，不會將該指定檔案清空
$fp = @fopen('./dir1/file1.txt', 'r+');
fwrite($fp, 'Hello,World\n123456\n12345454545');
fwrite($fp, "Hello,World\n123456\n12345454545");  // 記事本還是沒換行
fwrite($fp, "Hello,World\r\n123456\r\n12345454545");  // 記事本有換行，windows格式
fflush($fp);  // 好習慣，清空緩沖流
fclose($fp);

// w會將該指定檔案清空
$fp = @fopen('./dir1/file2.txt', 'w');
fwrite($fp, "Hello,World\r\n123456\r\n12345454545");  // 記事本有換行，windows格式
fflush($fp);  // 好習慣，清空緩沖流
fclose($fp);

// a -> append，補在後面，適合寫日誌
$fp = @fopen('./dir1/file2.txt', 'a');
fwrite($fp, "Hello,World\r\n123456\r\n12345454545\r\n");
fwrite($fp, "Hello,World\r\n123456\r\n12345454545\r\n");
fwrite($fp, "Hello,World\r\n123456\r\n12345454545\r\n");
fflush($fp);  // 好習慣，清空緩沖流
fclose($fp);