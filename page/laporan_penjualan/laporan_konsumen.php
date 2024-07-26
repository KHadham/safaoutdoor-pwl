<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LAPORAN DATA KONSUMEN
                            </h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Telpon</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
// Pengaturan koneksi ke database
$host = "localhost"; // Sesuaikan dengan host database Anda
$username = "root"; // Sesuaikan dengan username database Anda
$password = ""; // Sesuaikan dengan password database Anda
$database = "db_safa_outdoor"; // Sesuaikan dengan nama database Anda

// Membuat koneksi ke database
$koneksi = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}

// Query SQL untuk mengambil data dari tabel tb_konsumen
$sql = "SELECT * FROM tb_konsumen";

// Melakukan query ke database
$result = $koneksi->query($sql);

// Memeriksa apakah query berhasil dieksekusi
if ($result->num_rows > 0) 
    // Menggunakan fetch_assoc() untuk mengambil setiap baris data sebagai array asosiatif
    while ($data = $result->fetch_assoc()) {
                                    	?>
                                        <tr>
                                            
                                            <td><?php echo $data['nama']?></td>
                                            <td><?php echo $data['alamat']?></td>
                                            <td><?php echo $data['telpon']?></td>
                                            <td><?php echo $data['email']?></td>
                                        </tr>
                                    	<?php } ?>
                                    </tbody>
                                </table>
                            </div>