<?php
    require "includes/dbh.inc.php";
    echo "<br>";
    $sql = "SELECT * FROM vacancy";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while($row = mysqli_fetch_assoc($result)){
        echo "<div class='cyka'>";
            echo $row["Company_Name"]."<br>";
            echo $row["Vacancy_Category"]."<br>";
            echo nl2br($row["Pitch"])."<br><br>";
        echo "</div>";
    }

?>