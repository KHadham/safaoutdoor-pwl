<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    DATA Peralatan
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Peralatan</th>
                                <th>Label Peralatan</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Ukuran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;

                            $sql = $koneksi->query("SELECT equipment.*, category.name AS category_name, size.size_label AS size_label
                        FROM equipment
                        JOIN category ON equipment.id_category = category.id_category
                        JOIN size ON equipment.id_size = size.id_size");

                            // Check for errors
                            if (!$sql) {
                                die("Query failed: " . $koneksi->error . "\nQuery: " . $koneksi->last_query);
                            }
                            while ($data = $sql->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td>EQP_<?php echo $data['id_equipment'] ?></td>
                                    <td><?php echo $data['equipment_name'] ?></td>
                                    <td><?php echo $data['category_name'] ?></td>
                                    <td><?php echo "Rp. " . number_format($data['price']) ?></td>
                                    <td><?php echo $data['size_label'] ?></td>
                                    <td>
                                        <a href="?page=equipment&aksi=edit&idx=<?php echo $data['id_equipment'] ?>" class="btn btn-success">Edit</a>
                                        <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini !')" href="?page=equipment&aksi=delete&idx=<?php echo $data['id_equipment'] ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <a href="?page=equipment&aksi=tambah" class="btn btn-primary">Tambah Data</a>
                </div>