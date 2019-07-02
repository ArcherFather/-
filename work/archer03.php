<?php
$var1 =1;  // $[a-zA-Z$_][a-zA-Z0-9$_]*

$ok = 1;
echo gettype($ok) . '<br>';  // 取得變數型別
$ok = 'brad';
echo gettype($ok) . '<br>';
$ok = true;
echo gettype($ok) . '<br>';
$ok = 12.3;
echo gettype($ok) . '<br>';
$ok = array();
echo gettype($ok) . '<hr>';

$var1 = 10;
$var2 = 3;
$var3 = $var1 / $var2;
echo (int)($var3) . '<br>';  // double => int
$var4 = $var1 % $var2;
echo $var4 . '<br>';
$var5 = 012;  // 以0開頭為首，便是八進位
echo $var5 . '<br>';
$var6 = 0x12;  // 十六進位
echo $var6 . '<br>';
$var7 = 10;
$var8 = $var7++;
echo "{$var7} : {$var8}<br>";
?>
<hr />

<?php
// 字串練習 (""會解析變數，''不會)
$var1 = 'BRAD';
$var2 = 3;
echo "{$var1} => {$var2}kg<br>";
echo '{$var1} => {$var2}kg';

echo $var1 . ' => '. $var2 . 'kg<br>';

// + -> 會努力將變數轉換成數學，. ->努力將變數轉換成文字
?>