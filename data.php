<?php
    require "includes/dbh.inc.php";
    echo "<br>";
    $sql = "SELECT * FROM vacancy";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    while($row = mysqli_fetch_assoc($result)){
        echo "<div class='cyka'>";
            echo $row["Company_Name"]."<br>";
            echo $row["SerialNumber"]."<br>";
            echo $row["Vacancy_Category"]."<br>";
            echo nl2br($row["Pitch"])."<br><br>";
        echo "<form method='POST' action='edit.php'>
        <input type='hidden' name='ID' value='".$row['ID']."'>
        <input type='hidden' name='cn' value='".$row['Company_Name']."'>
        <input type='hidden' name='vn' value='".$row['Vacancy_Category']."'>
        <input type='hidden' name='msg' value='".$row['Pitch']."'>
        <button>Edit</button>
        </form>
        <form method='POST' action='includes/delete.inc.php'>
        <input type='hidden' name='ID' value='".$row['ID']."'>
        <input type='hidden' name='cn' value='".$row['Company_Name']."'>
        <input type='hidden' name='vn' value='".$row['Vacancy_Category']."'>
        <input type='hidden' name='msg' value='".$row['Pitch']."'>
        <button>Delete</button>
        </form>
        </div>";
       
    }

?>