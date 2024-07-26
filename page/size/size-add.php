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
                    Tambah Ukuran
                </h2>
            </div>
            <div class="body">
                <form method="POST">

                    <label for="">Label Ukuran</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="size_label" class="form-control" />
                        </div>
                    </div>

                    <label for="">Kategori</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="kategori" class="form-control show-tick">
                                <option value="">-- Pilih Kategori --</option>
                                <?php
                                $categoryQuery = $koneksi->query("SELECT * FROM category");
                                $categories = [];
                                while ($row = $categoryQuery->fetch_assoc()) {
                                    $categories[] = $row;
                                }
                                foreach ($categories as $category) : ?>
                                    <option value="<?php echo htmlspecialchars($category['id_category']); ?>">
                                        <?php echo htmlspecialchars($category['name']); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">

                </form>
                <?php
                if (isset($_POST['simpan'])) {
                    $size_labelx = $_POST['size_label'];
                    $kategori = $_POST['kategori'];


                    // if (empty($nama_barang) || empty($satuan)) {
                    //     die('Missing required fields.');
                    // }

                    $sql2 = "INSERT INTO size (id_size, id_category, size_label) VALUES (NULL, '$kategori', '$size_labelx')";
                    if ($koneksi->query($sql2) === TRUE) {
                ?>
                        <script type="text/javascript">
                            alert("Data Berhasil di Simpan");
                            window.location.href = "?page=size";
                        </script>
                <?php
                    } else {
                        echo "Error===>" . $sql2 . "<br>" . $koneksi->error;
                    }
                }
                ?>