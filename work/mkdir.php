<?php
if(@mkdir("dir1")){
    echo 'mkdir OK';
}else{
    echo 'mkdir failure';
}