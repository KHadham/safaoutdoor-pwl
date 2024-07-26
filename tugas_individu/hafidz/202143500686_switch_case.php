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
                    $hari = "Selasa";

                    switch ($hari) {
                        case "Senin":
                            echo "Hari ini adalah Senin";
                            break;
                        case "Selasa":
                            echo "Hari ini adalah Selasa";
                            break;
                        case "Rabu":
                            echo "Hari ini adalah Rabu";
                            break;
                        case "Kamis":
                            echo "Hari ini adalah Kamis";
                            break;
                        case "Jumat":
                            echo "Hari ini adalah Jumat";
                            break;
                        case "Sabtu":
                            echo "Hari ini adalah Sabtu";
                            break;
                        case "Minggu":
                            echo "Hari ini adalah Minggu";
                            break;
                        default:
                            echo "Hari tidak valid";
                    }
                ?>
                </td>
            </tr>
            <td colspan="2" style="text-align: center;"> Copyright @Hafidz al Fachridzi - 202143500686</td>
        </table>
    </body>
</html>