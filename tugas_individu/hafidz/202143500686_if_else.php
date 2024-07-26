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
                <td >
                <?php
                    $nilai = 75;
                    if ($nilai >= 85) {
                        echo "Nilai Anda adalah A";
                        } elseif ($nilai >= 70) {
                        echo "Nilai Anda adalah B";
                        } elseif ($nilai >= 60) {
                        echo "Nilai Anda adalah C";
                        } elseif ($nilai >= 50) {
                        echo "Nilai Anda adalah D";
                        } else {
                        echo "Nilai Anda adalah E";
                        }
                ?>
                </td>
            </tr>
            <td colspan="2" style="text-align: center;"> Copyright @Hafidz al Fachridzi - 202143500686</td>
        </table>
    </body>
</html>