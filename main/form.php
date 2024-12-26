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
      <!-- Fixed navbar -->
      <!-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Liburin Dulu!</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/index.html">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?aksi=daftar">Daftar Paket Wisata</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?aksi=modifikasi">Modifikasi Pesanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?aksi=modifikasi">Modifikasi Pesanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?aksi=modifikasi">Modifikasi Pesanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?aksi=modifikasi">Modifikasi Pesanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?aksi=modifikasi">Modifikasi Pesanan</a>
              </li>
            </ul>
          </div>
        </div>
      </nav> -->
    </header>
    <!-- Begin page content -->
    <main class="flex-shrink-0">
      <div class="container">
        <form method="post" action="proses.php">
          <div class="card mt-2">
            <div class="card-header bg-dark text-white">Form Pemesanan Paket Wisata</div>
            <div class="card-body">
              <div class="mb-3">
                <label for="nama_pemesanan" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_pemesanan" name="nama_pemesanan" placeholder="Nama Lengkap Sesuai Tanda Pengenal" required />
              </div>
              <div class="mb-3">
                <label for="hp_pemesan" class="form-label">Nomor Handphone</label>
                <input type="text" class="form-control" id="hp_pemesan" name="hp_pemesan" placeholder="Nomor Handphone 08..." required />
              </div>
              <div class="mb-3">
                <label for="waktu_wisata" class="form-label">Waktu Mulai Perjalanan</label>
                <input type="date" class="form-control" id="waktu_wisata" name="waktu_wisata" placeholder="Waktu Mulai Perjalanan" required />
              </div>
              <div class="mb-3">
                <label for="hari_wisata" class="form-label">Hari Wisata</label>
                <input type="number" class="form-control" id="hari_wisata" value="1" name="hari_wisata" placeholder="Jumlah Hari Perjalanan" required />
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="paket_inap" value="1" id="paket_inap" />
                  <label class="form-check-label" for="paket_inap"> Penginapan (Rp. 1.000.000) </label>
                </div>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="paket_transport" value="1" id="paket_transport" />
                  <label class="form-check-label" for="paket_transport"> Transportasi (Rp. 1.200.000) </label>
                </div>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="paket_makan" value="1" id="paket_makan" />
                  <label class="form-check-label" for="paket_makan"> Service/ Makan (Rp. 500.000) </label>
                </div>
              </div>
              <div class="mb-3">
                <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
                <input type="number" class="form-control" id="jumlah_peserta" value="1" name="jumlah_peserta" placeholder="Jumlah Hari Perjalanan" required />
              </div>
              <div class="mb-3">
                <label for="harga" class="form-label">Harga Paket</label>
                <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga Paket Perjalanan" readonly />
              </div>
              <div class="mb-3">
                <label for="total" class="form-label">Total Tagihan</label>
                <input type="number" class="form-control" id="total" name="total" placeholder="Total Paket Perjalanan" readonly />
              </div>
            </div>
            <div class="card-footer">
              <input type="submit" class="btn btn-primary" value="Simpan" />
              <input type="reset" class="btn btn-danger" value="Ulangi" />
            </div>
          </div>
        </form>
      </div>
    </main>
  </body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>