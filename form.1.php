<form action="form.1.php">
<input id='x' name = "x">
+
<input id='y' name = "y">
<input type= 'submit' value='計算'>

<?php
if(isset($result))
    echo $result;
?>
</form>

<script>
    function add() {
        let x = document.getElementById('x').value;
        let x = document.getElementById('x').value;
        let result = parseInt(x) + parseInt(y);

    }
</script>