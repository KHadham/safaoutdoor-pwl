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

if (!empty($_POST["id_category"])) {
    $id_category = $_POST['id_category'];
    $sizeQuery = $koneksi->query("SELECT * FROM size WHERE id_category='$id_category'");
    $sizes = [];
    while ($row = $sizeQuery->fetch_assoc()) {
        $sizes[] = $row;
    }

    foreach ($sizes as $size) {
        echo '<option value="' . htmlspecialchars($size['id_size']) . '">' . htmlspecialchars($size['size_label']) . '</option>';
    }
}
