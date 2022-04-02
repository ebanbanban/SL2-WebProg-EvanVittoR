<?php
    include("config.php");
    session_start();

    if(isset($_POST['Edit'])){

        //Validasi Lagi

        $_SESSION["editValid"] = "";

        $namaDepan = $_POST['namaDepan'];
        $NIK = $_POST['nik'];
        $noHp = $_POST['noHp'];
        $kodePos = $_POST['kodePos'];

        if($namaDepan == ""){
            $_SESSION["editValid"] .= "Nama Depan tidak boleh kosong!<br>";
        }else{
            $_SESSION["namaDepan"] = $namaDepan;
        }

        if(strlen($NIK) != 16){
            $_SESSION["editValid"] .= "NIK harus berisi 16 digit!<br>";
        }else{
            $_SESSION["NIK"] = $NIK;
        }

        if(strlen($noHp) < 10){
            $_SESSION["editValid"] .= "Nomor HP harus berisi minimal 10 digit!<br>";
        }else{
            $_SESSION["noHp"] = $noHp;
        }

        if(strlen($kodePos) != 5){
            $_SESSION["editValid"] .= "Kode Pos harus berisikan 5 digit!<br>";
        }else{
            $_SESSION["kodePos"] = $kodePos;
        }

        // Validasi sudah benar semua
        if($_SESSION["editValid"] == ""){
            $namaFile = $_FILES['fotoProfil']['name'];
            $tmp_name = $_FILES['fotoProfil']['tmp_name'];
            $dirUpload = "terupload/";
            $terupload = move_uploaded_file($tmp_name, $dirUpload.$namaFile);
            
            if($namaFile){
                $str_query = "update user set namaDepan = '".$_POST['namaDepan']."', namaTengah = '".$_POST['namaTengah']."', namaBelakang = '".$_POST['namaBelakang']."', tempatLahir ='".$_POST['tempatLahir']."', tanggalLahir = '".$_POST['tanggalLahir']."', nik = '".$_POST['nik']."', wargaNegara = '".$_POST['wargaNegara']."', email = '".$_POST['email']."', noHp = '".$_POST['noHp']."', alamat = '".$_POST['alamat']."', kodePos = '".$_POST['kodePos']."', fotoProfil='".$namaFile."' where username ='".$_SESSION['accountKey']."'";
            }
            else{
                $str_query = "update user set namaDepan = '".$_POST['namaDepan']."', namaTengah = '".$_POST['namaTengah']."', namaBelakang = '".$_POST['namaBelakang']."', tempatLahir ='".$_POST['tempatLahir']."', tanggalLahir = '".$_POST['tanggalLahir']."', nik = '".$_POST['nik']."', wargaNegara = '".$_POST['wargaNegara']."', email = '".$_POST['email']."', noHp = '".$_POST['noHp']."', alamat = '".$_POST['alamat']."', kodePos = '".$_POST['kodePos']."' where username ='".$_SESSION['accountKey']."'";
            }

            $query = mysqli_query($connection, $str_query);

            if($query){
                header('Location: profile.php');
            }else{
                echo "Edit Gagal".mysql_error($connection);
            }

        }else{
            header("Location: edit.php");
        }

        
    }
?>