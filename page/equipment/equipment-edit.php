<?php
$idnya = $_GET['idx'];
$sql = $koneksi->query("select * from equipment where id_equipment='$idnya'");
$tampil = $sql->fetch_assoc();
$idnya_category = $tampil['id_category'];
$idnya_size = $tampil['id_size'];

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
                            <input type="text" name="equipment_ui" class="form-control" value="<?php echo $tampil['equipment_name']; ?>" />
                        </div>
                    </div>

                    <label for="">Harga Peralatan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" name="harga_ui" class="form-control" value="<?php echo $tampil['price']; ?>" />
                        </div>
                    </div>

                    <label for="">Kategori</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select id="kategori_ui" name="kategori_ui" class="form-control show-tick">
                                <option value="">-- Pilih Kategori --</option>
                                <?php
                                $categoryQuery = $koneksi->query("SELECT * FROM category");
                                while ($row = $categoryQuery->fetch_assoc()) {
                                    $selected = ($row['id_category'] == $idnya_category) ? 'selected' : '';
                                    echo "<option value='" . htmlspecialchars($row['id_category']) . "' $selected>" . htmlspecialchars($row['name']) . "</option>";
                                }
                                ?>
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
<script type="text/javascript">
    $(document).ready(function() {
        function fetchSizes(categoryId, selectedSize) {
            $.ajax({
                url: 'page/equipment/get-size.php',
                method: 'POST',
                data: {
                    id_category: categoryId
                },
                success: function(data) {
                    $('#ukuran_ui').html(data);
                    if (selectedSize) {
                        $('#ukuran_ui').val(selectedSize);
                    }
                },
                error: function(data) {
                    console.log('error', data);
                }
            });
        }

        // Fetch sizes when category is changed
        $('#kategori_ui').change(function() {
            var categoryId = $(this).val();
            fetchSizes(categoryId);
        });

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

        // Fetch sizes on page load if a category is pre-selected
        var preSelectedCategory = '<?php echo $idnya_category; ?>';
        var preSelectedSize = '<?php echo $idnya_size; ?>';
        if (preSelectedCategory) {
            fetchSizes(preSelectedCategory, preSelectedSize);
        }
    });
</script>
<?php
if (isset($_POST['simpan'])) {
    $equipment_var = $_POST['equipment_ui'];
    $harga_var = $_POST['harga_ui'];
    $kategori_var = $_POST['kategori_ui'];
    $ukuran_var = $_POST['ukuran_ui'];

    $sql2 = $koneksi->query("update equipment set equipment_name='$equipment_var',id_category='$kategori_var',price='$harga_var',id_size='$ukuran_var' where id_equipment='$idnya'");
    if ($sql2) {
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