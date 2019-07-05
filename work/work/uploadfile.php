<?php
if(!isset($_FILES['upload'])) exit(0);

// 檔案上傳處理如何，是apache負責，這裡回傳成功只是apache留給我們的告知資訊
// 此$_FILES並不是物件內容，是Apache留下的資訊
$upload = $_FILES['upload'];
if($upload['error'] == 0){
    // if(copy($upload['tmp_name'], "dir1/{$upload['name']}")){
    //     echo 'Upload Success';
    // }else{
    //     echo 'Upload Failure';
    // }

    if(is_uploaded_file($upload['tmp_name'])){
        if(move_uploaded_file($upload['tmp_name'], "dir1/{$upload['name']}")){
            echo 'Upload Success';
        }else{
            echo 'Upload Failure';
        }
    }

}else{  // 這是在Apache就不成功
    echo 'Oops';
}
