<?php 

        include "dbh.inc.php";
        $ID = $_POST["ID"];
        $cn = $_POST["cn"];
        $vn = $_POST["vn"];
        $msg = $_POST["msg"];
        $sql = "UPDATE vacancy SET Pitch='$msg' WHERE ID='$ID'";
        mysqli_query($conn, $sql);
        header("Location: ../index.php");
        exit();