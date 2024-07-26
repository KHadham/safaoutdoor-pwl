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
                    $bil1 = 100;
                    $bil2 = 20;
                    $teks1 = "PHP";
                    $teks2 = "php";

                    printf ("%d == %d hasilnya %d<br/>",$bil1, $bil2, $bil1 == $bil2);
                    printf ("%d != %d hasilnya %d<br/>",$bil1, $bil2, $bil1 != $bil2);
                    printf ("%d >= %d hasilnya %d<br/>",$bil1, $bil2, $bil1 >= $bil2);
                    printf ("%s == %s hasilnya %d<br/>", $teks1, $teks2, $teks1 == $teks2 );
                    printf ("%s != %s hasilnya %d<br/>", $teks1, $teks2, $teks1 != $teks2 );

                ?>
                </td>
            </tr>
            <td colspan="2" style="text-align: center;"> Copyright @Hafidz al Fachridzi - 202143500686</td>
        </table>
    </body>
</html>