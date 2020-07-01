<?php
    $ID = $_POST["ID"];
    $cn = $_POST["cn"];
    $vn = $_POST["vn"];
    $msg = $_POST["msg"];


echo "<form method='POST' action='includes/function.inc.php'>
        <input type='hidden' name='ID' value='".$ID."'>
        <input type='hidden' name='cn' value='".$cn."'>
        <input type='hidden' name='vn' value='".$vn."'>
        <textarea name='msg'>".$msg."</textarea>
        <button name='editbutton'>Edit</button>
        </form>";