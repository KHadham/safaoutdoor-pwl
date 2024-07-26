<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    DATA KONSUMEN
                </h2>

            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID pelanggan</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Email</th>
                                <th>riwayat sewa</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;

                            $sql = $koneksi->query("SELECT
    c.id_customer,
    c.nama_depan,
    c.nama_belakang,
    c.alamat,
    c.telepon,
    c.email,
    COUNT(r.id_rental) AS rental_count
FROM
    customers c
LEFT JOIN
    rentals r ON c.id_customer = r.id_customer
GROUP BY
    c.id_customer, c.nama_depan, c.nama_belakang;
");

                            while ($data = $sql->fetch_assoc()) {

                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td>CST_<?php echo $data['id_customer'] ?></td>
                                    <td><?php echo $data['nama_depan'] ?> <?php echo $data['nama_belakang'] ?></td>
                                    <td><?php echo $data['alamat'] ?></td>
                                    <td><?php echo $data['telepon'] ?></td>
                                    <td><?php echo $data['email'] ?></td>
                                    <td><?php echo($data['rental_count'] > 0 ? $data['rental_count'] : "belum pernah sewa"); ?></td>
                                    <td>
                                        <a href="?page=konsumen&aksi=edit&id=<?php echo $data['id_customer'] ?>" class="btn btn-success">Edit</a>
                                        <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini !')" href="?page=konsumen&aksi=delete&id=<?php echo $data['id_customer'] ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <a href="?page=konsumen&aksi=tambah" class="btn btn-primary">Tambah Data </a>
                </div>