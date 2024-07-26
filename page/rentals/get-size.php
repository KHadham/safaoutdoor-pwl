<?php
$host = "localhost"; // Host database, biasanya "localhost"
$username = "root"; // Username database
$password = ""; // Password database, default kosong
$database = "safa_outdoor"; // Nama database yang ingin diakses

// Melakukan koneksi ke database
$koneksi = new mysqli($host, $username, $password, $database);

// Check koneksi
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['id_category'])) {
    $id_category = intval($_GET['id_category']);

    $query = "SELECT * FROM size WHERE id_category = '$id_category'";
    $result = $koneksi->query($query);

    $sizes = [];
    while ($row = $result->fetch_assoc()) {
        $sizes[] = $row;
    }

    echo json_encode($sizes);
}
