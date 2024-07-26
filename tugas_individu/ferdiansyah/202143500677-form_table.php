<!DOCTYPE html>
<html lang="en-US" style="height: auto; min-height: 100%;">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas 1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
if (!function_exists('getContent')) {
    function getContent() {
        echo '
        <main class="content_tabel">
            <div class="main_content_tabel">
                <h2>Membuat Tabel</h2>
                <form method="POST" action="index.php?page=proses_table">
                    <label for="rows">Jumlah Baris:</label>
                    <input type="number" id="rows" name="rows" required>
                    <label for="columns">Jumlah Kolom:</label>
                    <input type="number" id="columns" name="columns" required>
                    <input type="submit" value="Buat">
                </form>
            </div>
        </main>';
    }
}
?>

</body>
</html>
