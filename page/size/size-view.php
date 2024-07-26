<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    DATA Ukuran
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID ukuran</th>
                                <th>Label Ukuran</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;

                            $sql = $koneksi->query("SELECT 
                                    s.id_size, 
                                    c.name AS category_name, 
                                    s.size_label 
                                FROM 
                                    size s 
                                JOIN 
                                    category c ON s.id_category = c.id_category
                                ");

                            while ($data = $sql->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td>SZ_<?php echo $data['id_size'] ?></td>
                                    <td><?php echo $data['size_label'] ?></td>
                                    <td><?php echo $data['category_name'] ?></td>
                                    <td>
                                        <a href="?page=size&aksi=edit&idx=<?php echo $data['id_size'] ?>" class="btn btn-success">Edit</a>
                                        <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini !')" href="?page=size&aksi=delete&id=<?php echo $data['id_size'] ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <a href="?page=size&aksi=tambah" class="btn btn-primary">Tambah Data</a>
                </div>