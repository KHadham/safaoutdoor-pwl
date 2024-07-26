<?php
// Fetch categories from database
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
                <h2>Tambah Alat</h2>
            </div>
            <div class="body">
                <form method="POST" action="">
                    <label for="nama_barang">Nama Barang</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="nama_barang" id="nama_barang" class="form-control" />
                        </div>
                    </div>

                    <label for="kategori">Kategori</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="kategori" id="kategori" class="form-control show-tick">
                                <option value="">-- Pilih Kategori --</option>
                                <?php foreach ($categories as $category) : ?>
                                    <option value="<?php echo htmlspecialchars($category['id']); ?>">
                                        <?php echo htmlspecialchars($category['name']); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <label for="harga_beli">Harga Beli</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" id="harga_beli" name="harga_beli" class="form-control" />
                        </div>
                    </div>

                    <input type="submit" name="simpans" value="simpan" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>

<?php
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['kategori'])) {
        $selectedCategory = $_POST['kategori'];
        echo "Selected Category ID: " . htmlspecialchars($selectedCategory);
    } else {
        echo "No category selected.";
    }
}
?>