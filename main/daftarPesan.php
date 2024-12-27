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

<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'liburin';

$db = mysqli_connect($hostname, $username, $password, $database_name);

$sql = "SELECT * FROM pemesanan where is_deleted = 0 order by created_at desc";

$query = mysqli_query($db, $sql);

if (mysqli_num_rows($query) == 0) {
?>
   <h1 class="text-center fw-bold my-3">Daftar Pemesanan</h1>
   <table class="table mb-5 container border">
      <thead class="table-secondary">
         <tr align="center">
            <th scope="col">#</th>
            <th scope="col">Nama Pemesan</th>
            <th scope="col">Nomor HP</th>
            <th scope="col">Tanggal Berangkat</th>
            <th scope="col">Durasi</th>
            <th scope="col">Jumlah Peserta</th>
            <th scope="col">Jenis Paket</th>
            <th scope="col">Total Tagihan</th>
            <th scope="col">Aksi</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td colspan="9" class="text-center">Data tidak ditemukan</td>
         </tr>
      </tbody>
   </table>
<?php
} else {
?>
   <h1 class="text-center fw-bold my-3">Daftar Pemesanan</h1>
   <table class="table mb-5 border container">
      <thead class="table-secondary">
         <tr align="center">
            <th scope="col">#</th>
            <th scope="col">Nama Pemesan</th>
            <th scope="col">Nomor HP</th>
            <th scope="col">Tanggal Berangkat</th>
            <th scope="col">Durasi</th>
            <th scope="col">Jumlah Peserta</th>
            <th scope="col">Jenis Paket</th>
            <th scope="col">Total Tagihan</th>
            <th scope="col">Aksi</th>
         </tr>
      </thead>
      <tbody>
         <?php
         $co = 1;
         while ($detail = mysqli_fetch_assoc($query)) {
         ?>
            <tr align="center">
               <th scope="row"><?= $co ?></th>
               <td><?= $detail['nama'] ?></td>
               <td><?= $detail['no_hp'] ?></td>
               <td><?= date("d F Y", strtotime($detail['waktu_wisata'])) ?></td>
               <td><?= $detail['hari_wisata'] ?> hari</td>
               <td><?= $detail['jumlah_peserta'] ?> orang</td>
               <td><?= $detail['paket_wisata'] ?></td>
               <td>Rp. <?= number_format($detail['total_tagihan'], 0, ',', '.') ?></td>
               <td align="center"><a class="btn btn-success mb-2" href="invoice.php?id=<?= $detail['id'] ?>"><i class="bi bi-receipt me-1"></i> Invoice</a>
                  <a class="btn btn-danger" href="hapus.php?id=<?= $detail['id'] ?>"><i class="bi bi-trash-fill me-1"></i> Hapus</a>
               </td>
            </tr>
         <?php
            $co++;
         }
         ?>
      </tbody>
   </table>
<?php
}
?>

</body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>