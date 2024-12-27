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
<main class="flex-shrink-0">
            <div class="container">
               <form method="post" action="../lib/proses.php">
                  <div class="card mt-2" data-aos="fade-up">
                     <div class="card-header bg-dark text-white">
                        Form Pemesanan Paket Wisata
                     </div>
                     <div class="card-body">
                        <div class="mb-3">
                           <label for="nama_pemesanan" class="form-label fw-bold">Nama Lengkap</label>
                           <input type="text" class="form-control" id="nama_pemesanan" name="nama_pemesanan" placeholder="Nama Lengkap Sesuai Tanda Pengenal" required>
                        </div>
                        <div class="mb-3">
                           <label for="hp_pemesan" class="form-label fw-bold">Nomor Handphone</label>
                           <input type="text" class="form-control" id="hp_pemesan" name="hp_pemesan" placeholder="Nomor Handphone 08..." required>
                        </div>
                        <div class="mb-3">
                           <label for="waktu_wisata" class="form-label fw-bold">Waktu Mulai Perjalanan</label>
                           <input type="date" class="form-control" id="waktu_wisata" name="waktu_wisata" placeholder="Waktu Mulai Perjalanan" required>
                        </div>
                        <div class="mb-3">
                           <label for="hari_wisata" class="form-label fw-bold">Hari Wisata</label>
                           <input type="number" class="form-control" id="hari_wisata" value="1" name="hari_wisata" placeholder="Jumlah Hari Perjalanan" required>
                        </div>
                        <div class="mb-3">
                           <label for="paket_wisata fw-bold" class="form-label fw-bold">Paket Wisata</label>
                        </div>
                        <div class="mb-3">
                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="paket_wisata" value="Paket Bronze" id="paket_bronze">
                              <label class="form-check-label" for="paket_bronze">
                                 Bronze (Rp. 750K)
                              </label>
                           </div>
                        </div>
                        <div class="mb-3">
                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="paket_wisata" value="Paket Silver" id="paket_silver">
                              <label class="form-check-label" for="paket_silver">
                                 Silver (Rp. 1.25K)
                              </label>
                           </div>
                        </div>
                        <div class="mb-3">
                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="paket_wisata" value="Paket Gold" id="paket_gold">
                              <label class="form-check-label" for="paket_gold">
                                 Gold (Rp. 1.65K)
                              </label>
                           </div>
                        </div>
                        <div class="mb-3">
                           <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
                           <input type="number" class="form-control" id="jumlah_peserta" value="1" name="jumlah_peserta" placeholder="Jumlah Hari Perjalanan" required>
                        </div>
                        <div class="mb-3">
                           <label for="harga" class="form-label">Harga Paket</label>
                           <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga Paket Perjalanan" readonly>
                        </div>
                        <div class="mb-3">
                           <label for="total" class="form-label">Total Tagihan</label>
                           <input type="number" class="form-control" id="total" name="total" placeholder="Total Paket Perjalanan" readonly>
                        </div>
                     </div>         
                     <div class="card-footer">
                        <input type="submit" class="btn btn-primary" value="Simpan">
                        <input type="reset" class="btn btn-danger" value="Ulangi">
                     </div>
                  </div>
                  <script>
                     //tentukan konstanta biaya masing-masing
                     const paket_bronze = 750000;
                     const paket_silver = 1250000;
                     const paket_gold = 1650000;

                     function updateTotalCost() {
                        //inisisi harga paket 0
                        let totalCost = 0;

                        //referensi dari checkbox
                        const bronzeCheckbox = document.getElementById('paket_bronze');
                        const silverCheckbox = document.getElementById('paket_silver');
                        const goldCheckbox = document.getElementById('paket_gold');

                        //jika inap checkbox ter-check
                        if (bronzeCheckbox.checked) {
                           totalCost += paket_bronze;
                        }

                        //jika transport checkbox ter-check
                        if (silverCheckbox.checked) {
                           totalCost += paket_silver;
                        }

                        //jika makan checkbox ter-check
                        if (goldCheckbox.checked) {
                           totalCost += paket_gold;
                        }

                        document.getElementById('harga').value = totalCost;
                     }

                     function updateTotal() {
                        let TotalTagihan = 0;

                        var hari_wisata = document.getElementById('hari_wisata').value;
                        var jumlah_peserta = document.getElementById('jumlah_peserta').value;
                        var harga = document.getElementById('harga').value;

                        TotalTagihan = hari_wisata * jumlah_peserta * harga;

                        document.getElementById('total').value = TotalTagihan;
                     }

                     document.getElementById('paket_bronze').addEventListener('change', updateTotalCost);
                     document.getElementById('paket_silver').addEventListener('change', updateTotalCost);
                     document.getElementById('paket_gold').addEventListener('change', updateTotalCost);

                     document.getElementById('paket_bronze').addEventListener('change', updateTotal);
                     document.getElementById('paket_silver').addEventListener('change', updateTotal);
                     document.getElementById('paket_gold').addEventListener('change', updateTotal);

                     document.getElementById('hari_wisata').addEventListener('change', updateTotalCost);
                     document.getElementById('jumlah_peserta').addEventListener('change', updateTotalCost);

                     document.getElementById('hari_wisata').addEventListener('change', updateTotal);
                     document.getElementById('jumlah_peserta').addEventListener('change', updateTotal);

                     updateTotalCost();
                     updateTotal();
                  </script>
            </div>
         </main>

      </div>
   </div>
</section>
  </body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>