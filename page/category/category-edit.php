<script type="text/javascript">
    function sum() {
        var harga_beli = document.getElementById('harga_beli').value;
        var harga_jual = document.getElementById('harga_jual').value;
        var result = parseInt(harga_jual) - parseInt(harga_beli);
        if (!isNaN(result)) {
            document.getElementById('profit').value = result;
        }

    }
</script>
<?php
$idnya = $_GET['idx'];
$sql = $koneksi->query("select * from category where id_category='$idnya'");
$tampil = $sql->fetch_assoc();

?>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Edit Kategori
                </h2>
            </div>
            <div class="body">
                <form method="POST">

                    <label for="">Label Kategori</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="category_label" class="form-control" value="<?php echo $tampil['name']; ?>" />
                        </div>
                    </div>

                    <input type="submit" name="simpan" value="Simpan perubahan" class="btn btn-primary">

                </form>

                <?php

                if (isset($_POST['simpan'])) {
                    $aa = $_POST['category_label'];

                    $sql2 = $koneksi->query("update category set name='$aa' where id_category='$idnya'");

                    if ($sql2) {
                ?>
                        <script type="text/javascript">
                            alert("Data Berhasil di Edit");
                            window.location.href = "?page=category";
                        </script>


                <?php
                    }
                }
                ?>