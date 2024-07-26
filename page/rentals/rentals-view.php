<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    DATA penyewaans
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>id rental</th>
                                <th>nama penyewa</th>
                                <th>tanggal sewa</th>
                                <th>total price</th>
                                <th>durasi</th>
                                <th>status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;

                            $sql = $koneksi->query("SELECT r.id_rental, c.nama_depan, c.nama_belakang, r.created_at, r.rental_days, r.total_price, r.status, COUNT(ir.id_rental) AS item_count FROM rentals r JOIN customers c ON c.id_customer = r.id_customer LEFT JOIN item_rentals ir ON r.id_rental = ir.id_rental GROUP BY r.id_rental, c.nama_depan, c.nama_belakang, r.created_at, r.rental_days, r.total_price, r.status;");
                            if (!$sql) {
                                die("Query failed: " . $koneksi->error . "\nQuery: " . $koneksi->last_query);
                            }
                            while ($data = $sql->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td>RTL_<?php echo $data['id_rental'] ?></td>
                                    <td><?php echo $data['nama_depan'] ?> <?php echo $data['nama_belakang'] ?></td>
                                    <td><?php echo $data['created_at'] ?></td>
                                    <td><?php echo "Rp. " . number_format($data['total_price']) ?></td>
                                    <td><?php echo $data['rental_days'] ?> hari</td>
                                    <td><?php echo $data['status'] ?></td>
                                    <td>
                                        <a href="#" onclick="fetchRentalItems('<?php echo $data['id_rental'] ?>')" class="btn btn-warning">sewaan</a>
                                        <a href="?page=rentals&aksi=edit&idx=<?php echo $data['id_rental'] ?>" class="btn btn-success">Edit</a>
                                        <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini !')" href="?page=rentals&aksi=delete&idx=<?php echo $data['id_rental'] ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <a href="?page=rentals&aksi=tambah" class="btn btn-primary">Tambah Data</a>
                    <div class="header">
                        <h2>
                            barang yang di sewa
                        </h2>
                        <i>Kalo kosong coba klik sewaan yang lain</i>
                    </div>
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Peralatan</th>
                                <th>KAtegori</th>
                                <th>Jumlah</th>
                                <th>Ukuran</th>
                                <th>Harga</th>
                            </tr>
                        </thead>

                        <tbody id="rental-items">

                            <!-- Rental items will be populated here by JavaScript -->
                        </tbody>
                    </table>
                </div>

                <script type="text/javascript">
                    function fetchRentalItems(id_rental) {
                        $.ajax({
                            url: 'page/rentals/get-rental-item.php',
                            method: 'POST',
                            data: {
                                id_rental: id_rental
                            },
                            success: function(response) {
                                $('#rental-items').html(response);
                            },
                            error: function(response) {
                                console.log('error', response);
                            }
                        });
                    }
                </script>
            </div>
        </div>
    </div>
</div>