<?php

$mydir = 'C:\Users\user\Desktop\axmpp\htdocs';
$fp = @opendir($mydir) or die('Server Busy');

while($file = readdir($fp)){
    echo "{$file} : \n";
}