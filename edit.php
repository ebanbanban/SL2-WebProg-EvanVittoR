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
    <title>Edit</title>
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

    <div class="profileEdit">
        <div class="headerEdit">
            <h2>Edit Profil</h2>
        </div>
    </div>
    
    <div class="editForm">
        <form action="prosesEdit.php" method="post" enctype="multipart/form-data">
            <div class="editContent">
                Nama Depan : 
                <input type="text" name="namaDepan" value="<?php echo $row['namaDepan']; ?>">
            </div>

            <div class="editContent">
                Nama Tengah : 
                <input type="text" name="namaTengah" value="<?php echo $row['namaTengah']; ?>">
            </div>

            <div class="editContent">
                <p>Nama Belakang : </p>
                <input type="text" name="namaBelakang" value="<?php echo $row['namaBelakang']; ?>">
            </div>

            <div class="editContent">
                <p>Tempat Lahir : </p>
                <input type="text" name="tempatLahir" value="<?php echo $row['tempatLahir']; ?>">
            </div>

            <div class="editContent">
                <p>Tanggal Lahir : </p>
                <input type="date" name="tanggalLahir" value="<?php echo $row['tanggalLahir']; ?>">
            </div>

            <div class="editContent">
                <p>NIK : </p>
                <input type="number" name="nik" value="<?php echo $row['nik']; ?>">
            </div>

            <div class="editContent">
                <p>Warga Negara : </p>
                <input type="text" name="wargaNegara" value="<?php echo $row['wargaNegara']; ?>">
            </div>

            <div class="editContent">
                <p>Email : </p>
                <input type="email" name="email" value="<?php echo $row['email']; ?>">
            </div>

            <div class="editContent">
                <p>No HP : </p>
                <input type="number" name="noHp" value="<?php echo $row['noHp']; ?>">
            </div>

            <div class="editContent">
                <p>Alamat : </p>
                <textarea name="alamat" id="" cols="30" rows="10"><?php echo $row['alamat']; ?></textarea>
            </div>

            <div class="editContent">
                <p>Kode Pos : </p>
                <input type="number" name="kodePos" value="<?php echo $row['kodePos']; ?>">
            </div>

            <div class="editContent">
                <p>Ubah Foto Profil : </p>
                <div class="editImage">
                    <img src="terupload/<?php echo $row['fotoProfil']; ?>" alt="fotoProfil" >

                    <input type="file" name="fotoProfil" accept="image/*">
                </div>
            </div>
            <br><br>

            <div class="validationAlert">
                <?php 
                if(isset($_SESSION['editValid'])){
                    echo $_SESSION['editValid'];
                    unset($_SESSION['editValid']);
                }//else echo "";
                ?>
            </div>

            

            <div class="buttonMenu">
                <div class="kembaliBtn">
                    <a href="profile.php">
                        Kembali
                        <!-- <button>Kembali</button> -->
                    </a>
                </div>

                <div class="registerBtn">
                    <input type="submit" value="Edit" name="Edit">
                </div>
            </div>
        </form>
    </div>
</body>
</html>