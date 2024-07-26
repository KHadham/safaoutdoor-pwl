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
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Tambah Kategori
                </h2>
            </div>
            <div class="body">
                <form method="POST">

                    <label for="">Label Kategori</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="category_label" class="form-control" />
                        </div>
                    </div>

                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">

                </form>
                <?php
                if (isset($_POST['simpan'])) {
                    $category_labelx = $_POST['category_label'];

                    $sql2 = "INSERT INTO category (id_category,  name) VALUES (NULL, '$category_labelx')";
                    if ($koneksi->query($sql2) === TRUE) {
                ?>
                        <script type="text/javascript">
                            alert("Data Berhasil di Simpan");
                            window.location.href = "?page=category";
                        </script>
                <?php
                    } else {
                        echo "Error===>" . $sql2 . "<br>" . $koneksi->error;
                    }
                }
                ?>