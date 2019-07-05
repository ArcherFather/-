<?php
    include_once 'sql.php';

    if(isset($_REQUEST['account'])){
        $account = $_REQUEST['account'];
        $passwd = $_REQUEST['passwd'];
        $realname = $_REQUEST['realname'];

        // 雜湊加密，單向加密 (也就是查不回密碼)
        $passwd = password_hash($passwd, PASSWORD_DEFAULT);

        // 讀取頭像，預設為null
        $icon = null;
        if($_FILES['icon']['error'] == 0){
            $icon = addslashes(file_get_contents($_FILES['icon']['tmp_name']));
        }

        $sql = "INSERT INTO member (account,passwd,realname,icon) VALUES " .
               "('{$account}','{$passwd}','{$realname}','{$icon}')";

        if($mysqli->query($sql)){
            header('Location: Login.php');
            // echo 'OK';
        }else{
            echo 'ERROR:' . $sql;
        }
    }
?>

<form method='post' action="register.php" onsubmit="return isSubmit();" enctype="multipart/form-data">
    Account: <input type="text" id="account" name="account" onchange="isNewAccount()" />
    <span id='mesg'></span>
    <br>
    Password: <input type="password" name="passwd" /><br>
    Realname: <input type="text" name="realname" /><br>
    Icon: <input type="file" name="icon" /><br>
    <input type="submit" value="Register" />
</form>

<script>
    // XML Object
    let xhttp = new XMLHttpRequest();
    let isDataOK = false;

    xhttp.onreadystatechange = function(){
        if (xhttp.readyState == 4 && xhttp.status == 200){
            if (xhttp.responseText == 0){
                document.getElementById('mesg').innerHTML = 'OK';
                isDataOK = true;
            }else{
                document.getElementById('mesg').innerHTML = 'XX';
            }
        }
    }

    function isNewAccount(){
        let account = document.getElementById('account').value;
        // alert(account);
        xhttp.open('GET', 'isNewAccount.php?account=' + account, true);
        xhttp.send();
    }

    function isSubmit(){
        return isDataOK;
    }
</script>