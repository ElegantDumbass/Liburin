<?php
$aksi = $_GET['aksi'] ?? null; // add a default value if the key doesn't exist

switch($aksi){
    case 'galeri':
        include 'main/galeri.php';
    break;
    case 'kontak':
        include 'main/kontak.php';
    break;
    case 'pesan':
        include 'main/pesan.php';
    break;
    
    default:
        // check if the file exists before trying to include it
        if (file_exists('/laragon/www/Liburin/index.php')) {
            include '/laragon/www/Liburin/index.php';
        } else {
            // handle the case where the file doesn't exist
            echo 'Error: File not found';
        }
    break;
}
?>