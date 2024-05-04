<?php
    include "../php/configDatabase.php";

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nowa = $_POST['nowa'];
        $lapangan = $_POST['lapangan'];
        $tanggal = $_POST['tanggal'];
        $waktu = $_POST['waktu'];
        $jam = $_POST['jam'];
        $total = $_POST['total'];

        $sql = "INSERT INTO pesanan (nama, nowa, lapangan, tanggal, jam, lama, total) VALUES ('$nama', '$nowa', '$lapangan', '$tanggal', '$waktu', '$jam', '$total')";

        if (mysqli_query($db, $sql)) {
            echo '<script type="text/javascript">',
                'alert("Data Berhasil Ditambahkan")',
                '</script>';
        } else {
            echo '<script type="text/javascript">',
                'alert("Data Gagal Ditambahkan: ' . mysqli_error($db) . '");',
                '</script>';
        }
        // Setelah data dimasukkan ke database
        $id = mysqli_insert_id($db); // Mengambil ID dari data yang baru dimasukkan
        
        // Mengarahkan pengguna ke nota.php dengan menyertakan ID sebagai parameter
        mysqli_close($db);
        header('Location: ../html/nota.php?id=' . $id);
        exit();
    }
?>