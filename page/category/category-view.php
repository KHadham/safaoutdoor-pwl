<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    DATA Kategori barang
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID kategori</th>
                                <th>Label kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;

                            $sql = $koneksi->query("SELECT * FROM category");

                            while ($data = $sql->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td>CTG_<?php echo $data['id_category'] ?></td>
                                    <td><?php echo $data['name'] ?></td>
                                    <td>
                                        <a href="?page=category&aksi=edit&idx=<?php echo $data['id_category'] ?>" class="btn btn-success">Edit</a>
                                        <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini !')" href="?page=category&aksi=delete&idx=<?php echo $data['id_category'] ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <a href="?page=category&aksi=tambah" class="btn btn-primary">Tambah Data</a>
                </div>