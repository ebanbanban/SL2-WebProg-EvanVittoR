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
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="navbar">
        <div class="appName">
            Aplikasi Pengelolaan Keuangan
        </div>
        <div class="direct">
            <div class="homeDirect">
                <a href="home.php">Home</a>
            </div>
            <div class="profile">
            <a href="profile.php">Profile</a>
            </div>
        </div>
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="profileDesc">
        <div class="headerProfile">
            <h2>Profil Pribadi</h2>

            <div class="editBtn">
                <a href='edit.php'>Edit</a>
            </div>
        </div>

        <div class="profileContent">
            <p>Nama Depan</p>
            <b>
                <?php
                    echo $row['namaDepan'];
                ?>
            </b>
        </div>

        <div class="profileContent">
            <p>Nama Tengah</p>
            <b>
                <?php
                    echo $row['namaTengah'];
                ?>
            </b>
        </div>

        <div class="profileContent">
            <p>Nama Belakang</p>
            <b>
                <?php
                    echo $row['namaBelakang'];
                ?>
            </b>
        </div>

        <div class="profileContent">
            <p>Tempat Lahir</p>
            <b>
                <?php
                    echo $row['tempatLahir'];
                ?>
            </b>
        </div>

        <div class="profileContent">
            <p>Tanggal Lahir</p>
            <b>
                <?php
                    echo $row['tanggalLahir'];
                ?>
            </b>
        </div>

        <div class="profileContent">
            <p>NIK</p>
            <b>
                <?php
                    echo $row['nik'];
                ?>
            </b>
        </div>

        <div class="profileContent">
            <p>Warga Negara</p>
            <b>
                <?php
                    echo $row['wargaNegara'];
                ?>
            </b>
        </div>

        <div class="profileContent">
            <p>Email</p>
            <b>
                <?php
                    echo $row['email'];
                ?>
            </b>
        </div>

        <div class="profileContent">
            <p>No HP</p>
            <b>
                <?php
                    echo $row['noHp'];
                ?>
            </b>
        </div>

        <div class="profileContent">
            <p>Alamat</p>
            <b>
                <?php
                    echo $row['alamat'];
                ?>
            </b>
        </div>

        <div class="profileContent">
            <p>Kode Pos</p>
            <b>
                <?php
                    echo $row['kodePos'];
                ?>
            </b>
        </div>

        <div class="profileContent">
            <p>Foto Profil</p>
            <div class="profileImage">
                <img src="terupload/<?php echo $row['fotoProfil']; ?>" alt="fotoProfil" >
            </div>
            
        </div>


    </div>
</body>
</html>