<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LapanganKu</title>
    <link rel="stylesheet" href="../css/form.css">
    <script src="../javascript/form.js"></script>
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
                <li><a href="./index.html" class="Beranda">Beranda</a></li>
                <li><a href="./tentang.html" class="Tentang">Tentang</a></li>
                <li><a href="./list.php" class="List">List Penyewaan</a></li>
                <li><a href="./form.php" class="Pemesanan">Pemesanan</a></li>
            </ul>
        </nav>
    </div>
    <h1>Form Sewa Lapangan</h1>
    <div class="MainBody">
        <div class="BodyLeft">
            <form action="../php/input.php" class="FormPesanan" method="POST" name="FormPesanan">
                <div>
                    <span>Nama Penyewa :</span>     
                    <input type="text" placeholder="nama" name="nama" required>
                </div>
                <div>
                    <span>Nomor WA Penyewa :</span>       
                    <input type="number" placeholder="Nomor WA" name="nowa" required>
                </div>
                <div>
                    <span>Lapangan yang Ingin Disewa :</span>     
                    <select id="lapangan" name="lapangan" required onchange="GantiInformasi()">
                        <option value="" disabled selected>Pilih Lapangan</option>
                        <option value="Super Futsal">Super Futsal</option>
                        <option value="Goro Arena">Goro Arena</option>
                    </select>
                </div>
                <div>
                    <span>Tanggal Lapangan Disewa :</span> 
                    <input type="date" placeholder="Tanggal" name="tanggal" required>
                </div>
                <div>
                    <span>Jam Lapangan Disewa :</span> 
                    <input id="WaktuMain" type="time" placeholder="Waktu" name="waktu" step="3600" min="09:00" max="21:00" required>
                </div>
                <div>
                    <span>Lama Bermain :</span> 
                    <input id="JamBermain" type="number" placeholder="1" name="jam" min="1" value="1" required onchange="EditTotal()">
                </div>
                <div>
                    <span>Total Pembayaran : Rp</span><span id="Total">0</span>
                    <input type="hidden" name="total" id="inputTotal" value="150000">
                </div>
                <div>
                    <input type="submit" name="submit" value="Sewa Sekarang">
                </div>
            </form>
        </div>
        <div class="BodyRight" id="BodyRight">
            <h3 id="InformasiLapangan">Informasi Lapangan</h3>
            <p id="NamaLapangan"> Silahkan pilih lapangan yang ingin disewa</p>
            <p id="NamaJalan"></p>
            <p id="WaktuBuka"></p>
            <p id="Harga"></p>
        </div>
    </div>
</body>
</html>
