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
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['rows']) && isset($_POST['columns'])) {
            $rows = intval($_POST['rows']);
            $columns = intval($_POST['columns']);
            if ($rows > 0 && $columns > 0) {
                echo '<main class="content_tabel">';
                echo '<div class="main_content_tabel">';
                echo '<h2>Hasil Tabel</h2>';
                echo '<table border="1">';
                for ($i = 0; $i < $rows; $i++) {
                    echo '<tr>';
                    for ($j = 0; $j < $columns; $j++) {
                        echo '<td>Row ' . ($i + 1) . ' Col ' . ($j + 1) . '</td>';
                    }
                    echo '</tr>';
                }
                echo '</table>';
                echo '</div>';
                echo '</main>';
            } else {
                echo '<p>Jumlah baris dan kolom harus lebih dari 0.</p>';
            }
        } else {
            echo '<p>Data tidak valid.</p>';
        }
    }
}
?>



</body>
</html>
