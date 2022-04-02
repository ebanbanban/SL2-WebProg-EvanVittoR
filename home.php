<?php
    include("config.php");
    session_start();

    $str_query = "select * from user where username = '".$_SESSION['accountKey']."'"; 
    $query = mysqli_query($connection, $str_query);
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <div class="appName">
            Aplikasi Pengelolaan Keuangan
        </div>
        <div class="direct">
            <div class="home">
                <a href="home.php">Home</a>
            </div>
            <div class="profileDirect">
            <a href="profile.php">Profile</a>
            </div>
        </div>
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="homeMain">
        <div class="halo"><p>Halo</p></div>
        <b>
            <?php
                echo $row['namaDepan']." ".$row['namaTengah']." ".$row['namaBelakang'];
            ?>
        </b>
        
        <p>, Selamat Datang di Aplikasi Pengelolaan Keuangan</p>
    </div>


</body>
</html>