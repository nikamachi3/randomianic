<?php
    if(isset($_POST["company-submit"])){
    require "dbh.inc.php";
    $cn = $_POST["company_name"];
    $vc = $_POST["vacancy_category"];
    $pitch = $_POST["pitch"];
    $sn = $_POST["serial"];
    $sql = "INSERT INTO vacancy(SerialNumber, Company_Name, Vacancy_Category, Pitch) VALUE('$sn','$cn', '$vc', '$pitch')";
    mysqli_query($conn, $sql);
    header('Location: ../addcompany.php?success=ura');
        exit();
    }
    else{
        header('Location: ../addcompany.php?error=somethingfuckedup');
        exit();
    }