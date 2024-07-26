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
                    $teks1 = "Aku Sedang Belajar";
                    $teks2 = "Pemrograman WEB 2";
                    $teks3 = " Menggunakan PHP";

                    $hasil = $teks1 . $teks2 . $teks3;
                    printf("hasil : %s<br/>",$hasil);
                    $hasil = $teks1 . "" . $teks2 . "" . $teks3;
                    echo "hasil :" . $hasil;
                ?>
                </td>
            </tr>
            <td colspan="2" style="text-align: center;"> Copyright @Hafidz al Fachridzi - 202143500686</td>
        </table>
    </body>
</html>