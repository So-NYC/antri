<?php
// deklarasi parameter koneksi database
$host     = "localhost";
$username = "root";
$password = "Jancok69!";
$database = "antrian";

// buat koneksi database
$mysqli = mysqli_connect($host, $username, $password, $database);

// cek koneksi
// jika koneksi gagal 
if (!$mysqli) {
  // tampilkan pesan gagal koneksi
  die('Koneksi Database Gagal : ' . mysqli_connect_error());
}
