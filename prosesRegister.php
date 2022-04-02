<?php
    include("config.php");

    session_start();

    if(isset($_POST['Register'])){
        $namaDepan = $_POST['namaDepan'];
        $NIK = $_POST['NIK'];
        $noHp = $_POST['noHp'];
        $kodePos = $_POST['kodePos'];
        $username = $_POST['username'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        // Agar Password Kuat
        $uppercase = preg_match('@[A-Z]@', $password1);
        $lowercase = preg_match('@[a-z]@', $password1);
        $number    = preg_match('@[0-9]@', $password1);
        $specialChars = preg_match('@[^\w]@', $password1);

        // Tidak Perlu Validasi
        $_SESSION["namaTengah"] = $_POST["namaTengah"];
        $_SESSION["namaBelakang"] = $_POST["namaBelakang"];
        $_SESSION["tempatLahir"] = $_POST["namaTengah"];
        $_SESSION["tglLahir"] = $_POST["tglLahir"];
        $_SESSION["wargaNegara"] = $_POST["wargaNegara"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["alamat"] = $_POST["alamat"];

        // Proses Validasi
        $_SESSION["regisValid"] = "";

        if($namaDepan == ""){
            $_SESSION["regisValid"] .= "Nama Depan tidak boleh kosong!<br>";
        }else{
            $_SESSION["namaDepan"] = $namaDepan;
        }

        if(strlen($NIK) != 16){
            $_SESSION["regisValid"] .= "NIK harus berisi 16 digit!<br>";
        }else{
            $_SESSION["NIK"] = $NIK;
        }

        if(strlen($noHp) < 10){
            $_SESSION["regisValid"] .= "Nomor HP harus berisi minimal 10 digit!<br>";
        }else{
            $_SESSION["noHp"] = $noHp;
        }

        if(strlen($kodePos) != 5){
            $_SESSION["regisValid"] .= "Kode Pos harus berisikan 5 digit!<br>";
        }else{
            $_SESSION["kodePos"] = $kodePos;
        }

        if($username == ""){
            $_SESSION["regisValid"] .= "Username tidak boleh kosong!<br>";
        }
        else{
            $check_username = "select * from user where username = '".$_POST['username']."'";
            $check_query = mysqli_query($connection, $check_username);
            $data_check = mysqli_fetch_array($check_query);

            if($data_check){
                $_SESSION["regisValid"] .= "Username sudah digunakan! Silahkan ganti Username Anda<br>";
            }

            $_SESSION["username"] = $username;
        }

        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password1) < 8) {
            $_SESSION["regisValid"] .= "Pasword minimal berisi 8 karakter dan harus memiliki huruf besar, huruf kecil, angka, dan spesial karakter!<br>";
        }else if($password1 != $password2){
            $_SESSION["regisValid"] .= "Password 1 dan 2 tidak sama!<br>";
        }else{
            $_SESSION["password1"] = $password1;
            $_SESSION["password2"] = $password2;
        }

        // Validasi sudah benar semua
        if($_SESSION["regisValid"] == ""){
            $namaFile = $_FILES['fotoProfil']['name'];
            $tmp_name = $_FILES['fotoProfil']['tmp_name'];
            $dirUpload = "terupload/";
            $terupload = move_uploaded_file($tmp_name, $dirUpload.$namaFile);
            $_SESSION["fotoProfil"] = $namaFile;

            $str_query = "insert into user values('".$_POST["NIK"]."', '".$_POST["namaDepan"]."', '".$_POST["namaTengah"]."', '".$_POST["namaBelakang"]."', '".$_POST["tempatLahir"]."', '".$_POST["tglLahir"]."', '".$_POST["wargaNegara"]."', '".$_POST["email"]."', '".$_POST["noHp"]."', '".$_POST["alamat"]."', '".$_POST["kodePos"]."', '".$namaFile."', '".$_POST["username"]."', '".$_POST["password1"]."')";

            $query = mysqli_query($connection, $str_query);
            if($query){
                header("location: welcome.php");
            }else{
                echo "proses daftar gagal".mysqli_error($connection);
            }
        }else{
            header("Location: register.php");
        }


    }

    
?>