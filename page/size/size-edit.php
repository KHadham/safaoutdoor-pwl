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
$sql = $koneksi->query("select * from size where id_size='$idnya'");
$tampil = $sql->fetch_assoc();
$satuan = $tampil['id_category'];

?>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Edit Ukuran
                </h2>
            </div>
            <div class="body">
                <form method="POST">

                    <label for="">Label Ukuran</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="size_label" class="form-control" value="<?php echo $tampil['size_label']; ?>" />
                        </div>
                    </div>

                    <label for="">Kategori</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="kategori" class="form-control show-tick">
                                <option value="">-- Pilih Kategori --</option>
                                <?php
                                $categoryQuery = $koneksi->query("SELECT * FROM category");
                                while ($row = $categoryQuery->fetch_assoc()) {
                                    $selected = ($row['id_category'] == $satuan) ? 'selected' : '';
                                    echo "<option value='" . htmlspecialchars($row['id_category']) . "' $selected>" . htmlspecialchars($row['name']) . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <input type="submit" name="simpan" value="Simpan perubahan" class="btn btn-primary">

                </form>

                <?php

                if (isset($_POST['simpan'])) {
                    $aa = $_POST['size_label'];
                    $bb = $_POST['kategori'];

                    $sql2 = $koneksi->query("update size set size_label='$aa',id_category='$bb' where id_size='$idnya'");

                    if ($sql2) {
                ?>
                        <script type="text/javascript">
                            alert("Data Berhasil di Edit");
                            window.location.href = "?page=size";
                        </script>


                <?php
                    }
                }
                ?>