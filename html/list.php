<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LapanganKu</title>
    <link rel="stylesheet" href="../css/list.css">
    <link rel="stylesheet" href="../css/dataTables.dataTables.css">
    <script src="../javascript/jquery-3.7.1.min.js"></script>
    <script src="../javascript/dataTables.js"></script>
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
    <div class="MainBody">
        <table class="ListTable" id="ListTable">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Nomor WA</th>
                    <th>Lapangan</th>
                    <th>Waktu Pemesanan</th>
                    <th>Jam Main</th>
                    <th>Total Pembayaran</th>
                    <th>Aksi</th>
                    <th>Nota</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "../php/configDatabase.php";
                    $sql = "SELECT * FROM pesanan";
                    $query = mysqli_query($db, $sql);
                    $no = 1;    
                    while($data = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $no;?></td>    
                            <td><?php echo $data['nama'];?></td>    
                            <td><?php echo $data['nowa'];?></td>    
                            <td><?php echo $data['lapangan'];?></td>    
                            <td><?php echo $data['tanggal'];?> <br> <?php echo $data['jam'];?></td>    
                            <td><?php echo number_format($data['lama']);?> Jam</td>    
                            <td>Rp<?php echo number_format($data['total']);?></td>
                            <td>
                                <a href="../php/hapus.php?id=<?php echo $data['id'];?>" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')">Hapus</a>
                            </td>
                            <td>
                                <a href="./nota.php?id=<?php echo $data['id'];?>">Cetak Nota</a>
                            </td>
                        </tr> 
                        <?php     
                        $no++;
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('#ListTable').DataTable();
        });
    </script>
</body>
</html>
