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
                        define('JUDUL', 'Hitung Luas Lingkaran');
                        define('PHI', '3.14');

                        echo JUDUL;

                        $r=10;
                        echo "<br>Jari-Jari :$r<br />";

                        $luas=PHI * $r * $r;
                        echo "Luas Lingkaran = $luas";
                    ?>
                        
                </td>
            </tr>
            <td colspan="2" style="text-align: center;"> Copyright @Hafidz al Fachridzi - 202143500686</td>
        </table>
    </body>
</html>