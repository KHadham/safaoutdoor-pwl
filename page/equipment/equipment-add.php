<?php
$categoryQuery = $koneksi->query("SELECT * FROM category");
$categories = [];
while ($row = $categoryQuery->fetch_assoc()) {
    $categories[] = $row;
}
?>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Tambah Peralatan
                </h2>
            </div>
            <div class="body">
                <form method="POST">

                    <label for="">Label Peralatan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="equipment_ui" class="form-control" />
                        </div>
                    </div>

                    <label for="">Harga Peralatan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" name="harga_ui" class="form-control" />
                        </div>
                    </div>

                    <label for="">Kategori</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="kategori_ui" id="kategori_ui" class="form-control show-tick">
                                <option value="">-- Pilih Kategori --</option>
                                <?php foreach ($categories as $category) : ?>
                                    <option value="<?php echo htmlspecialchars($category['id_category']); ?>">
                                        <?php echo htmlspecialchars($category['name']); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <label for="">Ukuran</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="ukuran_ui" id="ukuran_ui" class="form-control show-tick">
                                <option value="">-- Pilih Ukuran --</option>
                                <!-- Options will be populated by JavaScript -->
                            </select>
                        </div>
                    </div>

                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">

                </form>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#kategori_ui').change(function() {
                            var categoryId = $(this).val();
                            console.log('categoryId', categoryId)
                            $.ajax({
                                url: 'page/equipment/get-size.php',
                                method: 'POST',
                                data: {
                                    id_category: categoryId
                                },
                                success: function(data) {
                                    $('#ukuran_ui').html(data);
                                },
                                error: function(data) {
                                    console.log('error', data)
                                }
                            });
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_POST['simpan'])) {
    $equipment_var = $_POST['equipment_ui'];
    $harga_var = $_POST['harga_ui'];
    $kategori_var = $_POST['kategori_ui'];
    $ukuran_var = $_POST['ukuran_ui'];

    $sql2 = "INSERT INTO equipment (id_equipment,  equipment_name,id_category,price,id_size) VALUES (NULL, '$equipment_var','$kategori_var','$harga_var','$ukuran_var')";
    if ($koneksi->query($sql2) === TRUE) {
?>
        <script type="text/javascript">
            alert("Data Berhasil di Simpan");
            window.location.href = "?page=equipment";
        </script>
<?php
    } else {
        echo "Error===>" . $sql2 . "<br>" . $koneksi->error;
    }
}
?>