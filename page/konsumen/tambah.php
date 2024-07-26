<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Tambah Konsumen

                </h2>
            </div>
            <div class="body">
                <form method="POST">

                    <label for="">Nama depan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="nama_depan" class="form-control" />
                        </div>
                    </div>

                    <label for="">Nama belakang</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="nama_belakang" class="form-control" />
                        </div>
                    </div>

                    <label for="">Alamat</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="alamat" class="form-control" />
                        </div>
                    </div>


                    <label for="">telepon</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" name="telepon" maxlength="12" class="form-control" />
                        </div>
                    </div>


                    <label for="">Email</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="email" class="form-control" />
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


                    $sql = $koneksi->query("insert into customers (nama_depan,nama_belakang,alamat,telepon,email) values('$nama_depan','$nama_belakang','$alamat','$telepon','$email')");

                    if ($sql) {
                ?>

                        <script type="text/javascript">
                            alert("Data Berhasil di Simpan");
                            window.location.href = "?page=konsumen";
                        </script>


                <?php
                    }
                }
                ?>