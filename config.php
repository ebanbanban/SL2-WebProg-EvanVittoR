<?php
    $server = "localhost";
    $username = "root"; //username MYSQL
    $password = ""; //password MYSQL
    $db_name = "pengelolaKeuangan";

    $connection = mysqli_connect($server, $username, $password, $db_name);

    if($connection){
        //echo "Koneksi Berhasil";
    }else{
        throw new Exception("Mysql Connection Error:" .mysqli_connect_error());
    }

?>