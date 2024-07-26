<?php 
$host = "localhost"; // Host database, biasanya "localhost"
$username = "root"; // Username database
$password = ""; // Password database, default kosong
$database = "db_penjualan_barang"; // Nama database yang ingin diakses

// Melakukan koneksi ke database
$koneksi = new mysqli($host, $username, $password, $database);

// Check koneksi
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}
?>