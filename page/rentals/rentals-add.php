<?php
$query1 = $koneksi->query("SELECT * FROM customers");
$customers = [];
while ($row = $query1->fetch_assoc()) {
    $customers[] = $row;
}

$query3 = "SELECT eq.id_equipment, eq.equipment_name, eq.id_category, eq.price, eq.id_size,sz.size_label, cat.name as category_name 
FROM equipment eq 
JOIN category cat ON eq.id_category = cat.id_category
JOIN size sz ON eq.id_size = sz.id_size";
$equipment_result = $koneksi->query($query3);

$size_query = $koneksi->query("SELECT * FROM size where id_size != ''");
$sizes = [];
while ($row = $size_query->fetch_assoc()) {
    $sizes[] = $row;
}
?>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Tambah Sewa</h2>
            </div>
            <div class="body">
                <form method="POST" id="rentalForm">
                    <label for="">Pelanggan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="pelanggan_ui" id="pelanggan_ui" class="form-control show-tick" required>
                                <option value="">-- Pilih pelanggan --</option>
                                <?php foreach ($customers as $items) : ?>
                                    <option value="<?php echo htmlspecialchars($items["id_customer"]); ?>">
                                        <?php echo htmlspecialchars($items["nama_depan"]); ?> <?php echo htmlspecialchars($items["nama_belakang"]); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <label for="">Tanggal Sewa</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="date" name="Tanggal_ui" class="form-control" required />
                        </div>
                    </div>
                    <label for="">Durasi Sewa</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" id="duration_ui" name="duration_ui" class="form-control" value="1" required min="1" />
                        </div>
                    </div>
                    <label for="">status</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="status_ui" id="status_ui" class="form-control show-tick" required>
                                <option value="">-- Pilih status --</option>
                                <option value="booking">Booking</option>
                                <option value="rented">Rented</option>
                            </select>
                        </div>
                    </div>

                    <label for="">Alat yang mau di sewa</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="equipment_ui" id="equipment_ui" class="form-control show-tick">
                                <option value="">-- Pilih alat --</option>
                                <?php while ($row = $equipment_result->fetch_assoc()) {
                                    echo '<option value="' . htmlspecialchars($row["id_equipment"]) . '" 
                             data-id_equipment="' . htmlspecialchars($row["id_equipment"]) . '" 
                             data-name="' . htmlspecialchars($row["equipment_name"]) . '" 
                             data-category="' . htmlspecialchars($row["category_name"]) . '" 
                             data-category-id="' . htmlspecialchars($row["id_category"]) . '"
                             data-price="' . htmlspecialchars($row["price"]) . '" 
                             data-size="' . htmlspecialchars($row["size_label"]) . '" 
                             data-size-id="' . htmlspecialchars($row["id_size"]) . '">' . htmlspecialchars($row["equipment_name"]) . "</option>";
                                } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="button" id="add-item" value="Tambah barang" class="btn btn-primary">
                    </div>
                    <table class="table table-bordered table-striped table-hover dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID eqiupment</th>
                                <th>Nama Peralatan</th>
                                <th>Kategori</th>
                                <th>Jumlah</th>
                                <th>Ukuran</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="rental-items">
                        </tbody>
                    </table>

                    <div class="form-group">
                        <h3>Total Harga:</h3>
                        <h3 id="final-price"></h3>
                        <input type="hidden" id="total_price" name="total_price" value="0"> <!-- Hidden input for total price -->
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                    </div>
                    <input type="hidden" id="rental_items_data" name="rental_items_data" value="">

                </form>
                <script type="text/javascript">
                    var sizes = <?php echo json_encode($sizes); ?>;
                    document.getElementById('duration_ui').addEventListener('input', function() {
                        calculateFinalPrice();
                    });

                    function updateTotalPrice(row, unitPrice) {
                        var quantityInput = row.cells[4].querySelector('.quantity-input');
                        var quantity = parseInt(quantityInput.value);
                        var totalPrice = unitPrice * quantity;
                        row.cells[6].textContent = 'Rp. ' + totalPrice.toLocaleString(); // Update total price in cell6
                        calculateFinalPrice();
                    }

                    function calculateFinalPrice() {
                        var finalPrice = 0;
                        var duration = parseInt($('#duration_ui').val()) || 1; // Get the rental duration, default to 1 if not set
                        $('#rental-items tr').each(function() {
                            var rowPrice = $(this).find('td').eq(6).text().replace(/[^0-9]/g, ''); // Remove non-numeric characters
                            finalPrice += parseFloat(rowPrice);
                        });
                        finalPrice *= duration; // Multiply by the duration
                        $('#final-price').text('Rp. ' + finalPrice.toLocaleString());
                        $('#total_price').val(finalPrice); // Update the hidden input field
                    }

                    document.getElementById('add-item').addEventListener('click', function() {
                        var selectElement = document.getElementById('equipment_ui');
                        var selectedOption = selectElement.options[selectElement.selectedIndex];

                        // Fetching data from the selected option
                        var id = selectedOption.value;
                        var idequipment = selectedOption.getAttribute('data-id_equipment');
                        var name = selectedOption.getAttribute('data-name');
                        var category = selectedOption.getAttribute('data-category');
                        var categoryId = selectedOption.getAttribute('data-category-id');
                        var price = parseFloat(selectedOption.getAttribute('data-price'));
                        var sizeId = selectedOption.getAttribute('data-size-id');
                        // Validate if an option is selected
                        // alert(idequipment);
                        if (!id) {
                            alert('pilih alat yang mau di sewa');
                            return;
                        }

                        // Create a new row for the table
                        var tableBody = document.getElementById('rental-items');
                        var newRow = tableBody.insertRow();

                        // Insert cells and set their values
                        var cell1 = newRow.insertCell(0);
                        cell1.textContent = tableBody.rows.length; // Row number

                        var cell2 = newRow.insertCell(1);
                        cell2.textContent = idequipment;

                        var cell3 = newRow.insertCell(2);
                        cell3.textContent = name;

                        var cell4 = newRow.insertCell(3);
                        cell4.textContent = category;

                        var cell5 = newRow.insertCell(4);
                        cell5.innerHTML = '<input type="number" class="form-control quantity-input" value="1" min="1">';

                        var cell6 = newRow.insertCell(5);
                        cell6.innerHTML = '<select class="form-control size-select">Loading...</select>';

                        var cell7 = newRow.insertCell(6);
                        cell7.textContent = 'Rp. ' + price.toLocaleString(); // Initial total price (unit price)

                        var cell8 = newRow.insertCell(7);
                        cell8.innerHTML = '<button type="button" class="btn btn-danger btn-sm" onclick="removeRow(this)">Hapus</button>';

                        // Add event listener to the quantity input to update the total price
                        var quantityInput = cell5.querySelector('.quantity-input');
                        quantityInput.addEventListener('input', function() {
                            updateTotalPrice(newRow, price);
                        });
                        fetchSizes(categoryId, newRow, sizeId);

                        // Recalculate and update the final price after adding new item
                        calculateFinalPrice();

                        // Optionally, clear the select box
                        selectElement.value = '';
                    });

                    function fetchSizes(categoryId, row, defaultSizeId) {
                        console.log('categoryId', categoryId)
                        fetch('page/rentals/get-size.php?id_category=' + categoryId)
                            .then(response => response.json())
                            .then(sizes => {
                                var sizeSelect = '<select class="form-control size-select">';
                                sizes.forEach(size => {
                                    var selected = size.id_size == defaultSizeId ? ' selected' : '';
                                    sizeSelect += '<option value="' + size.id_size + '"' + selected + '>' + size.size_label + '</option>';
                                });
                                sizeSelect += '</select>';
                                row.cells[5].innerHTML = sizeSelect;
                            })
                            .catch(error => console.error('Error fetching sizes:', error));
                    }

                    function removeRow(button) {
                        var row = button.parentNode.parentNode;
                        row.parentNode.removeChild(row);
                        calculateFinalPrice();
                    }

                    document.getElementById('rentalForm').addEventListener('submit', function(event) {
                        var rentalItems = [];
                        document.querySelectorAll('#rental-items tr').forEach(function(row) {
                            var item = {
                                id: row.cells[0].textContent,
                                id_equipment: row.cells[1].textContent,
                                name: row.cells[2].textContent,
                                category: row.cells[3].textContent,
                                quantity: row.cells[4].querySelector('.quantity-input').value,
                                size: row.cells[5].querySelector('.size-select').value,
                                price: row.cells[6].textContent.replace(/[^0-9]/g, '')
                            };
                            rentalItems.push(item);
                        });
                        document.getElementById('rental_items_data').value = JSON.stringify(rentalItems);
                    });
                </script>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_POST["simpan"])) {
    // Insert into rental table
    $id_customer = $_POST["pelanggan_ui"];
    $created_at = $_POST["Tanggal_ui"];
    $rental_days = $_POST["duration_ui"];
    $status = $_POST["status_ui"];
    $total_price = $_POST["total_price"];

    $rental_items_data = json_decode($_POST['rental_items_data'], true);

    // Debugging output


    $sql_rental = "INSERT INTO rentals (id_rental, id_customer, created_at, rental_days, total_price, status) VALUES (NULL, '$id_customer', '$created_at', '$rental_days', '$total_price', '$status')";
    if ($koneksi->query($sql_rental) === true) {
        $id_rental = $koneksi->insert_id;

        // Loop through rental items and insert into item_rentals table
        foreach ($rental_items_data as $item) {
            $id_equipment = $item['id_equipment'];
            $quantity = $item['quantity'];
            $price = $item['price'];
            $size = $item['size'];
            // echo "<pre>";
            // echo "Rental Items Data:\n";
            // print_r($rental_items_data);
            // echo "</pre>";
            $sql_item_rentals = "INSERT INTO item_rentals (id_rental, id_equipment, quantity, price, id_size) VALUES ('$id_rental', '$id_equipment', '$quantity', '$price', '$size')";
            $koneksi->query($sql_item_rentals);
        }

        echo '<script type="text/javascript">
                alert("Data Berhasil di Simpan");
                window.location.href = "?page=rentals";
              </script>';
    } else {
        echo "Error: " . $sql_rental . "<br>" . $koneksi->error;
    }
}
?>