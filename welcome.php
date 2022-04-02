<?php
    include("config.php");

    // echo "Halo";

    $str_query = "select*from user";
    $query = mysqli_query($connection, $str_query);

    // while($row = mysqli_fetch_array($query)){
    //     echo $row['nik']." - ".$row['username']." - ".$row['password'];
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="welcomeHeader">
        <p>Aplikasi Pengelolaan Keuangan</p>
        <h1>Selamat Datang di Aplikasi Pengelolaan Keuangan</h1>
    </div>

    <div class="welcomeMenu">
        <div class="loginBtn">
            <a href="login.php"> 
                <button><b>Login</b></button>
            </a>
        </div>
        <div class="regisBtn">
            <a href="register.php">
                <button><b>Register</b></button>
            </a>
        </div>
    </div>
    
</body>
</html>