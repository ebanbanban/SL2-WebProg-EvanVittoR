<?php
    include("config.php");

    session_start();
    
    // Old Code (masih validasi berdasarkan session)

    // if(isset($_POST['Login'])){
        
    //     // Mengecek Username dan Pass

    //     $_SESSION["loginMsg"] = "";

    //     if(isset($_SESSION)){
    //         if(($_POST['usernameLogin'] == $_SESSION['username']) && ($_POST['passwordLogin'] == $_SESSION['password1'])){
    //             header("Location: home.php");
    //         }else{
                
    //             $_SESSION["loginMsg"] .= "Username atau Password Anda Salah!<br>";
    //             header("Location: login.php");
    //         }
            
    //     }
    // }

    if(isset($_POST['Login'])){
        $_SESSION["loginMsg"] = "";
        $_SESSION['accountKey'] = "";

        $str_query = "select nik, username, password from user where username = '".$_POST['usernameLogin']."'";
        $query = mysqli_query($connection, $str_query);
        $row = mysqli_fetch_array($query);

        if(isset($_SESSION)){
            if(($_POST['usernameLogin'] == $row['username']) && ($_POST['passwordLogin'] == $row['password'])){
                $_SESSION['accountKey'] = $row['username'];
                header("Location: home.php");
            }else{
                
                $_SESSION["loginMsg"] .= "Username atau Password Anda Salah!<br>";
                header("Location: login.php");
            }
            
        }
    }

?>