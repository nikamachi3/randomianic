<?php
    if(isset($_POST['login-submit'])){
        require "dbh.inc.php";
        $username = $_POST['usernameid'];
        $password = $_POST['psw'];
        if(empty($username) || empty($password)){
            header("Location: ../index.php?error=emptyfields");
            exit();
        }
        else{
            $sql = "SELECT * FROM users WHERE Username=? OR Email=?;";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../index.php?error=sqlerror");
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt, "ss", $username, $username);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if($row = mysqli_fetch_assoc($result)){
                    $passwordCheck = password_verify($password, $row['Password']);
                    if($passwordCheck == false){
                        header("Location: ../index.php?error=wrongpassword");
                        exit();
                    }
                    else if($passwordCheck == true){
                        session_start();
                        $_SESSION[usern] = $row['Username'];
                        $_SESSION[userID] = $row['ID'];
                        header("Location: ../index.php?login=success");
                        exit();
                    }
                    else{
                        header("Location: ../index.php?error=wrongpassword");
                        exit();
                    }
                }
                else{
                    header("Location: ../index.php?error=nouser");
                    exit();
                }
            }
        }
    }
    else{
        header("Location: ../index.php");
        exit();
    }