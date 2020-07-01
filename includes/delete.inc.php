<?php 

        include "dbh.inc.php";
        $ID = $_POST["ID"];
        $cn = $_POST["cn"];
        $vn = $_POST["vn"];
        $msg = $_POST["msg"];
        $sql = "DELETE FROM vacancy WHERE ID='$ID'";
        mysqli_query($conn, $sql);
        header("Location: ../index.php");
        exit();