<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Basic HTML Table</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }

        .centered {
            text-align: center;
        }
    </style>
</head>

<body>
    <table style="width:100%">
        <tr>
            <?php
      include '../component/header.php';      ?>

        </tr>
        <tr>
            
            <td colspan="1">
                <h5>ini halaman switch</h5>
                <?php
                $bulan = 2;
                switch ($bulan) {
                    case 1:
                        echo "Januari";
                        break;
                    case 2:
                        echo "Februari";
                        break;
                    case 3:
                        echo "Maret";
                        break;
                    case 4:
                        echo "April";
                        break;
                    case 5:
                        echo "Mei";
                        break;
                    case 6:
                        echo "Juni";
                        break;
                    case 7:
                        echo "Juli";
                        break;
                    case 8:
                        echo "Agustus";
                        break;
                    case 9:
                        echo "September";
                        break;
                    case 10:
                        echo "Oktober";
                        break;
                    case 11:
                        echo "November";
                        break;
                    case
                    12:
                        echo "Desember";
                        break;
                }
                ?>
            </td>
        </tr>
        <tr>
                        <?php include '../component/footer.php'; ?>

        </tr>
    </table>
</body>

</html>