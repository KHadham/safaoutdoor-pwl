<?php
$kode = $_GET['id'];
$sql = $koneksi->query("select * from customers where id_customer='$kode'");
$tampil = $sql->fetch_assoc();

?>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Edit Konsumen
                </h2>
            </div>
            <div class="body">
                <form method="POST">
                    <label for="">Nama Depan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="nama_depan" value="<?php echo $tampil['nama_depan'] ?>" class="form-control" />
                        </div>
                    </div>

                    <label for="">Nama Belakang</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="nama_belakang" value="<?php echo $tampil['nama_belakang'] ?>" class="form-control" />
                        </div>
                    </div>

                    <label for="">Alamat</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="alamat" value="<?php echo $tampil['alamat'] ?>" class="form-control" />
                        </div>
                    </div>

                    <label for="">telepon</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" name="telepon" maxlength="12" value="<?php echo $tampil['telepon'] ?>" class="form-control" />
                        </div>
                    </div>

                    <label for="">Email</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="email" value="<?php echo $tampil['email'] ?>" class="form-control" />
                        </div>
                    </div>

                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                </form>
                <?php

                if (isset($_POST['simpan'])) {
                    $nama_depan = $_POST['nama_depan'];
                    $nama_belakang = $_POST['nama_belakang'];
                    $alamat = $_POST['alamat'];
                    $telepon = $_POST['telepon'];
                    $email = $_POST['email'];


                    $sql = $koneksi->query("update  customers  set nama_depan='$nama_depan', nama_belakang = '$nama_belakang',alamat='$alamat',telepon='$telepon',email='$email' where id_customer='$kode'");

                    if ($sql) {
                ?>

                        <script type="text/javascript">
                            alert("Data Berhasil di Edit");
                            window.location.href = "?page=konsumen";
                        </script>


                <?php
                    }
                }
                ?>