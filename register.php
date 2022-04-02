<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        session_start();
    ?>

    <div class="regisHeader">
        <h1>Register</h1>
    </div>

    <div class="regisForm">
        <form action="prosesRegister.php" method="post" enctype="multipart/form-data">
            <div class="namaDepan">
                Nama Depan
                <input type="text" name="namaDepan" value="<?php 
                    if(isset($_SESSION['namaDepan'])){
                        echo $_SESSION['namaDepan'];
                    }else echo "";?>"required>
            </div>

            <div class="namaTengah">
                Nama Tengah
                <input type="text" name="namaTengah" value="<?php 
                    if(isset($_SESSION['namaTengah'])){
                        echo $_SESSION['namaTengah'];
                    }else echo "";?>">
            </div>

            <div class="namaBelakang">
                Nama Belakang
                <input type="text" name="namaBelakang" value="<?php
                    if(isset($_SESSION['namaBelakang'])){
                        echo $_SESSION['namaBelakang'];
                    }else echo "";?>">
            </div>    
            
            <div class="tempatLahir">
                Tempat Lahir
                <input type="text" name="tempatLahir" value="<?php
                    if(isset($_SESSION['tempatLahir'])){
                        echo $_SESSION['tempatLahir'];
                    }else echo "";

                ?>" required>
            </div>

            <div class="tglLahir">
                Tanggal Lahir
                <input type="date" name="tglLahir" value="<?php
                    if(isset($_SESSION['tglLahir'])){
                        echo $_SESSION['tglLahir'];
                    }else echo "";

                ?>" required>
            </div>

            <div class="NIK">
                NIK
                <input type="number" name="NIK" value="<?php
                    if(isset($_SESSION['NIK'])){
                        echo $_SESSION['NIK'];
                    }else echo "";

                ?>" required>
            </div>
            
            <div class="wargaNegara">
                Warga Negara
                <input type="text" name="wargaNegara" value="<?php
                    if(isset($_SESSION['wargaNegara'])){
                        echo $_SESSION['wargaNegara'];
                    }else echo "";

                ?>" required>
            </div>

            <div class="email">
                Email
                <input type="email" name="email" value="<?php
                    if(isset($_SESSION['email'])){
                        echo $_SESSION['email'];
                    }else echo "";
                ?>" required>
            </div>

            <div class="noHp">
                No HP
                <input type="number" name="noHp" value="<?php
                    if(isset($_SESSION['noHp'])){
                        echo $_SESSION['noHp'];
                    }else echo "";
                ?>" required>
            </div>
            
            <div class="alamat">
                Alamat
                <textarea name="alamat" id="" cols="30" rows="10"><?php
                        if(isset($_SESSION['alamat'])){
                            echo $_SESSION['alamat'];
                        }else echo "";
                    ?>
                </textarea>
            </div>

            <div class="kodePos">
                Kode Pos
                <input type="number" name="kodePos" value="<?php
                    if(isset($_SESSION['kodePos'])){
                        echo $_SESSION['kodePos'];
                    }//else echo "";
                ?>" required>
            </div>

            <div class="fotoProfil">
                Foto Profil
                <input type="file" name="fotoProfil" accept="image/*" required>
            </div>
            
            <div class="username">
                Username
                <input type="text" name="username" value="<?php
                    if(isset($_SESSION['username'])){
                        echo $_SESSION['username'];
                    }//else echo "";
                ?>" required>
            </div>

            <div class="password1">
                Password 1
                <input type="password" name="password1" value="<?php
                    if(isset($_SESSION['password1'])){
                        echo $_SESSION['password1'];
                    }//else echo "";

                ?>" required>
            </div>

            <div class="password2">
                Password 2
                <input type="password" name="password2" value="<?php
                    if(isset($_SESSION['password2'])){
                        echo $_SESSION['password2'];
                    }//else echo "";

                ?>" required>
            </div>

            <div class="validationAlert">
                <?php
                    if(isset($_SESSION['regisValid'])){
                        echo $_SESSION['regisValid'];
                        unset($_SESSION['regisValid']);
                    }//else echo "";
                ?>
            </div>

            <div class="buttonMenu">

                <div class="kembaliBtn">
                    <a href="welcome.php">
                        Kembali
                        <!-- <button>Kembali</button> -->
                    </a>
                </div>

                <div class="registerBtn">
                    <input type="submit" value="Register" name="Register">
                </div>
            </div>
        </form>
    </div>
</body>
</html>