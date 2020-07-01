<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div>
            <a href="index.php">HOME</a>;
                <?php
                if(isset($_SESSION['userID'])){
                    echo '<form action="includes/logout.inc.php">
                    <button type="submit" name="logout-submit">Logout</button>
                </form> 
                <form action="addcompany.php" method="post">
                    <button type="submit" name="add-submit">ADDCOMPANY</button>
                </form>';
                }
                else{
                    echo '<form action="includes/login.inc.php" method="post">
                    <input type="text" name="usernameid" placeholder="username">
                    <input type="password" name="psw" placeholder="password">
                    <button name="login-submit" type="submit">SUBMIT</button>
                </form>
                <a href="signup.php">Dont have a Login? Signup here</a>';
                }
                ?>
                
                
            </div>
        </nav>
    </header>