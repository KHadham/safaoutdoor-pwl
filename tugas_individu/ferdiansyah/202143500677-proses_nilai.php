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
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nilai'])) {
            $nilai = intval($_POST['nilai']);
            $grade = '';

            if ($nilai >= 85 && $nilai <= 100) {
                $grade = 'A';
            } elseif ($nilai >= 70 && $nilai <= 84) {
                $grade = 'B';
            } elseif ($nilai >= 60 && $nilai < 70) {
                $grade = 'C';
            } elseif ($nilai >= 50 && $nilai < 60) {
                $grade = 'D';
            } elseif ($nilai < 50) {
                $grade = 'E';
            } else {
                $grade = 'Nilai tidak valid';
            }

            echo '<main class="content_nilai">';
            echo '<div class="main_content_nilai">';
            echo '<h2>Hasil Konversi Nilai</h2>';
            echo '<p>Nilai Angka: ' . htmlspecialchars($nilai) . '</p>';
            echo '<p>Nilai Huruf: ' . htmlspecialchars($grade) . '</p>';
            echo '</div>';
            echo '</main>';
        } else {
            echo '<p>Data tidak valid.</p>';
        }
    }
}
?>


</body>
</html>
