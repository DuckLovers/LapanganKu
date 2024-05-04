<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $namaDatabase = "lapanganku";
    $db = mysqli_connect($server, $user, $password, $namaDatabase);
    if(!$db){
        die("Gagal terhubung dengan database: ". mysqli_connect_error());
    }
?>