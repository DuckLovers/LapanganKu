<?php
    require_once '../vendor/autoload.php'; // Ubah path sesuai dengan struktur proyek kamu

    use Dompdf\Dompdf;

    // Mendapatkan data dari form POST
    $nama = $_POST['nama'];
    $nowa = $_POST['nowa'];
    $lapangan = $_POST['lapangan'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $jam = $_POST['jam'];
    $total = $_POST['total'];

    // Membuat HTML untuk PDF
    $html = "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>LapanganKu - Nota Transaksi</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap');

            * {
                margin: 0;
                padding: 0;
            }
            
            html{
                background-color: white;
            }
            
            body{
                font-family: 'Roboto', sans-serif;
            }
            
            .Nota{
                margin: 2rem;
                background-color: antiquewhite;
                border-radius: 16px;
            }
            
            .MainImage{
                max-width: 100%;
                height: 35vh;
                background-repeat: no-repeat;
                align-items: center;
                background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(../image/LapanganBola.jpg);
                border-radius: 16px 16px 0 0;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                overflow: hidden;
            }
            
            .HeaderText{
                background-color: orange;
                padding: .6rem;
            }
            
            .MainName{
                text-align: center;
                position: absolute;
                top: 17%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: white;
                font-size: 50px;
            }
            
            .MainBody{
                margin: 2rem;
                padding-bottom: 2rem;
                display: grid;
                grid-template-columns: 1fr 1fr;
                align-items: center;
            }
            
            .MainBody P{
                font-size: 24px;
            }
        </style>
    </head>
    <body>
        <div class='Nota'>
            <div class='MainImage'>
                <div class='MainName'>
                    <h1>LapanganKu</h1>
                </div>
            </div>
            <div class='HeaderText'>
                <h1>NOTA TRANSAKSI</h1>
            </div>
            <div class='MainBody'>
                    <p>Nama             : $nama</p>
                    <p>Nomor WA         : $nowa</p>
                    <p>Lapangan         : $lapangan</p>
                    <p>Tanggal          : $tanggal</p>
                    <p>Jam Penyewaan    : $waktu</p>
                    <p>Lama Penyewaan   : $jam jam</p>
                    <p>Total Pembayaran : Rp$total</p>  
            </div>
        </div>
    </body>
    </html>
    ";

    // Membuat instance dari Dompdf
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);

    // Menyetel ukuran dan orientasi halaman
    $dompdf->setPaper('A4', 'portrait');

    // Render HTML sebagai PDF
    $dompdf->render();

    // Menyimpan hasil render dalam file PDF
    $dompdf->stream("Nota_Transaksi.pdf", array("Attachment" => false));
?>
