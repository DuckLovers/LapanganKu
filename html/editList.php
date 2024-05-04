<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LapanganKu</title>
    <link rel="stylesheet" href="../css/form.css">
    <script src="../javascript/form.js"></script>
    <?php
        $id = $_GET['id'] ?? '';
        $nama = urldecode($_GET['nama'] ?? '');
        $nowa = urldecode($_GET['nowa'] ?? '');
        $lapangan = urldecode($_GET['lapangan'] ?? '');
        $tanggal = urldecode($_GET['tanggal'] ?? '');
        $jam = urldecode($_GET['jam'] ?? '');
        $lama = urldecode($_GET['lama'] ?? '');
        $total = urldecode($_GET['total'] ?? '');
    ?>
</head>
<body>
    <div>
        <div class="MainImage">
            <div class="MainName">
                <h1>LapanganKu</h1>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="./index.html">Beranda</a></li>
                <li><a href="./tentang.html">Tentang</a></li>
                <li><a href="./list.php">List Penyewaan</a></li>
                <li><a href="./form.php">Pemesanan</a></li>
            </ul>
        </nav>
    </div>
    <h1>Edit Data Sewa Lapangan</h1>
    <div class="MainBody">
        <div class="BodyLeft">
            <form action="./nota.php" class="FormPesanan" method="POST" name="FormPesanan">
                <div>
                    <input type="hidden" name="id" value="<?php echo $id?>">
                </div>
                <div>
                    <span>Nama Penyewa :</span>     
                    <input type="text" placeholder="nama" name="nama" value="<?php echo $nama?>" required>
                </div>
                <div>
                    <span>Nomor WA Penyewa :</span>       
                    <input type="number" placeholder="Nomor WA" name="nowa" value="<?php echo $nowa?>" required>
                </div>
                <div>
                    <span>Lapangan yang Ingin Disewa :</span>     
                    <select id="lapangan" name="lapangan" required onchange="GantiInformasi()">
                        <option value="" disabled selected>Pilih Lapangan</option>
                        <option value="Super Futsal" <?php echo ($lapangan ?? '') === 'Super Futsal' ? 'selected' : ''; ?>>Super Futsal</option>
                        <option value="Goro Arena" <?php echo ($lapangan ?? '') === 'Goro Arena' ? 'selected' : ''; ?>>Goro Arena</option>
                    </select>
                </div>
                <div>
                    <span>Tanggal Lapangan Disewa :</span> 
                    <input type="date" placeholder="Tanggal" name="tanggal" value="<?php echo $tanggal?>" required>
                </div>
                <div>
                    <span>Jam Lapangan Disewa :</span> 
                    <input id="WaktuMain" type="time" placeholder="Waktu" name="waktu" step="3600" min="09:00" max="21:00" value="<?php echo $jam?>" required>
                </div>
                <div>
                    <span>Lama Bermain :</span> 
                    <input id="JamBermain" type="number" placeholder="1" name="jam" min="1" value="<?php echo $lama?>" required onchange="EditTotal()">
                </div>
                <div>
                    <span>Total Pembayaran : Rp</span><span id="Total">0</span>
                    <input type="hidden" name="total" id="inputTotal"  value="<?php echo $total?>" >
                </div>
                <div>
                    <input type="submit" name="submit" value="Sewa Sekarang">
                </div>
            </form>
        </div>
        <div class="BodyRight">
            <h3>Informasi Lapangan</h3>
            <p id="NamaLapangan">Super Futsal</p>
            <p id="NamaJalan">Jl. Rutan No.1</p>
            <p id="WaktuBuka">Buka Jam 07:00 - 21:00 / Senin - Sabtu</p>
            <p id="Harga">Rp150.000/Jam</p>
        </div>
    </div>
</body>
</html>