<?php

include '../connection/koneksi.php';

if (isset($_POST['nama_pemesanan'])) {
	//eksekusi simpan
	//echo '<pre>';
	//var_dump($_POST);

	//definisikan setiap variabel
	$nama_pemesanan = htmlentities($_POST['nama_pemesanan']);
	$hp_pemesan = htmlentities($_POST['hp_pemesan']);
	$waktu_wisata = htmlentities($_POST['waktu_wisata']);
	$hari_wisata = htmlentities($_POST['hari_wisata']);
	$paket_wisata = htmlentities($_POST['paket_wisata']);
	$jumlah_peserta = htmlentities($_POST['jumlah_peserta']);
	$total_tagihan = htmlentities($_POST['total']);

	//pengkondisian jika salah satu paket tidak dipilih
	// $paket_inap = isset($_POST['paket_inap']) ? 1 : 0;
	// $paket_transport = isset($_POST['paket_transport']) ? 1 : 0;
	// $paket_makan = isset($_POST['paket_makan']) ? 1 : 0;

	$sql = "INSERT INTO pemesanan (nama, no_hp, waktu_wisata, hari_wisata,  paket_wisata, jumlah_peserta, total_tagihan) value ('$nama_pemesanan','$hp_pemesan','$waktu_wisata','$hari_wisata','$paket_wisata','$jumlah_peserta','$total_tagihan')";
	$query = mysqli_query($db, $sql);
	if ($query) { //echo 1; 
		// $id = mysqli_insert_id($db);
		header('Location: ../main/daftarPesan.php');
		//echo $id_pemesanan;
	} else {
		echo 0;
	}
} else {
	//muncul pesan error
	echo 'Ngapain?';
}