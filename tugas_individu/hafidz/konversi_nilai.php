<!DOCTYPE html>
<html>
    <head>
        <title>Tugas Pemrograman WebLanjut</title>
        <?php include "style.php"; ?>
    </head>
    <body>
        <table border="1px">
            <tr>
                <td colspan="2" style="text-align: center;">202143500686 - Hafidz al Fachridzi</td>
            </tr>
            <tr>
                <td>
                    <?php include "202143500686_list.php"; ?>
                </td>
                <td>
                    <h2>Konversi Nilai Angka ke Nilai Huruf</h2>
                        <form action="#" method="post">
                            <label for="nilai">Masukkan nilai angka:</label><br>
                            <input type="number" id="nilai" name="nilai" required min="0" max="100"><br><br>
                            <button type="submit">Konversi</button>
                        </form>

                        <div id="hasil">
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                // Ambil nilai dari form
                                $nilai = $_POST['nilai'];

                                // Proses konversi nilai ke huruf
                                if ($nilai >= 85 && $nilai <= 100) {
                                    $hasil = "A";
                                } elseif ($nilai >= 70 && $nilai <= 84) {
                                    $hasil = "B";
                                } elseif ($nilai >= 60 && $nilai < 70) {
                                    $hasil = "C";
                                } elseif ($nilai >= 50 && $nilai < 60) {
                                    $hasil = "D";
                                } elseif ($nilai < 50) {
                                    $hasil = "E";
                                } else {
                                    $hasil = "Nilai tidak valid";
                                }

                                // Menampilkan hasil konversi
                                echo "Nilai angka <strong>$nilai</strong> setara dengan nilai huruf <strong>$hasil</strong>.";
                            }
                            ?>
                </td>
            </tr>
            <td colspan="2" style="text-align: center;"> Copyright @Hafidz al Fachridzi - 202143500686</td>
        </table>
    </body>
</html>