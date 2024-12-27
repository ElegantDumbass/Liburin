<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wisata Majalengka | Main Yuk!!</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sticky-footer-navbar/" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- Favicons -->
    <meta name="theme-color" content="#712cf9" />
    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
  </head>
  <body class="d-flex flex-column h-100">
    <div class="container py-3">
        <?php include "/laragon/www/Liburin/lib/menu.php"; ?>
    </div> 
    </header>
    <!-- Begin page content -->
    <section class="ftco-section">
   <div class="container">
      <div class="row justify-content-center pb-4">
         <div data-aos="fade-up" class="col-md-12 heading-section text-center">
            <h2 class="mb-4">Buat Pesanan Kamu</h2>
         </div>
         <?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'liburin';

$db = mysqli_connect($hostname, $username, $password, $database_name);

$id_pemesanan = htmlentities($_GET['id']);

$sql = "SELECT * FROM pemesanan where id = '$id_pemesanan'";

$query = mysqli_query($db, $sql);
date_default_timezone_set('Asia/Jakarta');

if (mysqli_num_rows($query) == 0) {
   echo 'tidak ada';
   exit;
} else {
   $detail = mysqli_fetch_row($query);
?>

   <main class="flex-shrink-0 py-5">
      <div class="container">
         <form method="post" action="lib/proses.php">
            <div class="card mt-2" data-aos="fade-up">
               <div class="card-header bg-dark text-white">
                  Invoice Pemesanan #<?= $detail[0] ?>
               </div>
               <div class="card-body">
                  <div class="mb-3">
                     <label for="nama_pemesanan" class="form-label fw-bold">Nama Lengkap</label>
                     <p><?= $detail[1] ?></p>
                  </div>
                  <div class="mb-3">
                     <label for="hp_pemesan" class="form-label fw-bold">Nomor Handphone</label>
                     <p><?= $detail[2] ?></p>
                  </div>
                  <div class="mb-3">
                     <label for="waktu_wisata" class="form-label fw-bold">Waktu Mulai Perjalanan</label>
                     <p><?= date("d F Y", strtotime($detail[3])) ?></p>
                  </div>
                  <div class="mb-3">
                     <label for="hari_wisata" class="form-label fw-bold">Hari Wisata</label>
                     <p><?= $detail[4] ?></p>
                  </div>
                  <div class="mb-3">
                     <label for="paket_wisata fw-bold" class="form-label fw-bold">Paket Wisata</label>
                     <p><?= $detail[5] ?></p>
                  </div>
                  <div class="mb-3">
                     <label for="jumlah_peserta" class="form-label fw-bold">Jumlah Peserta</label>
                     <p><?= $detail[6] ?></p>
                  </div>
                  <div class="mb-3">
                     <label for="harga" class="form-label fw-bold">Total Tagihan</label>
                     <p>Rp. <?= number_format($detail[7], 0, ',', '.') ?></p>
                  </div>
                  <div class="mb-3">
                     <label for="created_at" class="form-label fw-bold">Waktu Pemesanan</label>
                     <p><?= date("d F Y H:i:s", strtotime($detail[8])) ?></p>
                  </div>
               </div>
            </div>
            <div class="card-footer d-print-none">
               <a href="form.php" class="btn btn-primary">Buat Pesanan Baru</a>
               <a href="#" onclick="window.print()" class="btn btn-success">Cetak</a>
            </div>
      </div>
      </div>
   </main>
<?php } ?>
         </main>

      </div>
   </div>
</section>
  </body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>