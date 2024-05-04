<?php
    include "../php/configDatabase.php";
    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        // Query untuk mengambil data dari database berdasarkan ID
        $sql = "SELECT * FROM pesanan WHERE id = $id";
        $result = mysqli_query($db, $sql);

        // Periksa apakah data ditemukan
        if(mysqli_num_rows($result) > 0) {
            // Ambil data dari hasil query
            $data = mysqli_fetch_assoc($result);

            // Gunakan data yang ditemukan
            $nama = $data['nama'];
            $nowa = $data['nowa'];
            $lapangan = $data['lapangan'];
            $tanggal = $data['tanggal'];
            $waktu = $data['jam'];
            $jam = $data['lama'];
            $total = $data['total'];
        } else {
            // Jika data tidak ditemukan, beri pesan atau tindakan lain sesuai kebutuhan
            echo "Data tidak ditemukan";
        }
    } else {
        // Jika parameter ID tidak tersedia dalam URL, beri pesan atau tindakan lain sesuai kebutuhan
        echo "<script>alert('ID tidak tersedia')</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LapanganKu</title>
    <link rel="stylesheet" href="../css/nota.css">
</head>
<body>
    <div class="Nota">
        <div class="MainImage">
            <div class="MainName">
                <h1>LapanganKu</h1>
            </div>
        </div>
        <div class="HeaderText">
            <h1>NOTA TRANSAKSI</h1>
        </div>
        <div class="MainBody">
            <div class="Left">
                <p>Nama</p>
                <p>Nomor WA</p>
                <p>Lapangan</p>
                <p>Tanggal</p>
                <p>Jam Penyewaan</p>
                <p>Lama Penyewaan</p>
                <p>Total Pembayaran</p>
            </div>
            <div class="Right">
                <?php
                    // Tampilkan data yang ditemukan
                    if(isset($nama)) {
                        echo "<p>$nama</p>";
                        echo "<p>$nowa</p>";
                        echo "<p>$lapangan</p>";
                        echo "<p>$tanggal</p>";
                        echo "<p>$waktu</p>";
                        echo "<p>$jam jam</p>";
                        echo "<p>Rp$total</p>";
                    }
                ?>
            </div>    
        </div>
    </div>

    <!-- <button class="SaveToPDF" onclick="window.print()">   
        <div class="ButtonContent">
            <img src="../image/pdf-svgrepo-com.svg">
            <span>Simpan Sebagai PDF</span>
        </div>
    </button> -->

    <!-- Untuk PDF --> 
        <form method="post" action="../php/toPDF.php">
            <input type="hidden" name="nama" value="<?php echo $nama; ?>">
            <input type="hidden" name="nowa" value="<?php echo $nowa; ?>">
            <input type="hidden" name="lapangan" value="<?php echo $lapangan; ?>">
            <input type="hidden" name="tanggal" value="<?php echo $tanggal; ?>">
            <input type="hidden" name="waktu" value="<?php echo $waktu; ?>">
            <input type="hidden" name="jam" value="<?php echo $jam; ?>">
            <input type="hidden" name="total" value="<?php echo $total; ?>">
            <button type="submit" class="SaveToPDF">
                <div class="ButtonContent">
                    <img src="../image/pdf-svgrepo-com.svg">
                    <span>Simpan Sebagai PDF</span>
                </div>
            </button>
        </form>
        <button class="BackButton" onclick="window.location.href = './index.html';"> Kembali </button>
</body>
</html>