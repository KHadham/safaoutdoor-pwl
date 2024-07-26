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

if (isset($_POST['id_customer'])) {
    $id_customer = $_POST['id_customer'];

    $query = "???";

    $result = $koneksi->query($query);

    if (!$result) {
        die("Query failed: " . $koneksi->error);
    }

    $no = 1;
    while ($data = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$no}</td>
                <td>" . htmlspecialchars($data['equipment_name']) . "</td>
                <td>" . htmlspecialchars($data['quantity']) . "</td>
                <td>" . htmlspecialchars($data['size_label']) . "</td>
                <td>Rp. " . number_format($data['price']) . "</td>
              </tr>";
        $no++;
    }
}
