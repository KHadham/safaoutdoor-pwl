<!DOCTYPE html>
<html lang="en-US" style="height: auto; min-height: 100%;">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Konversi Nilai</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
if (!function_exists('getContent')) {
    function getContent() {
        echo '
        <main class="content_nilai">
            <div class="main_content_nilai">
                <h2>Konversi Nilai Angka ke Nilai Huruf</h2>
                <div class="form-container">
                    <form method="POST" action="index.php?page=proses_nilai">
                        <label for="nilai">Masukkan Nilai:</label>
                        <input type="number" id="nilai" name="nilai" required min="0" max="100">
                        <input type="submit" value="Konversi">
                    </form>
                </div>
            </div>
        </main>';
    }
}
?>

</body>
</html>
