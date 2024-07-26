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
                        function nilaiKuadrat(&$nilai){
                            $nilai = $nilai * $nilai;
                        }

                        $bil = 3;
                        echo "Nilai = " . $bil;

                        nilaiKuadrat($bil);
                        echo "Nilai = " . $bil;
                    ?>
                </td>
            </tr>
            <td colspan="2" style="text-align: center;"> Copyright @Hafidz al Fachridzi - 202143500686</td>
        </table>
    </body>
</html>