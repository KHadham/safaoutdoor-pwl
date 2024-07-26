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
                <h5>ini halaman if else</h5>
                <?php
                $hari = 3;
                if ($hari == 1) echo "Senin";
                elseif ($hari == 2) echo "Selasa";
                elseif ($hari == 3) echo "Rabu";
                elseif ($hari == 4) echo "Kamis";
                elseif ($hari == 5) echo "Jumat";
                elseif ($hari == 6) echo "Sabtu";
                elseif ($hari == 7) echo "Minggu";
                else echo "Salah kode hari";
                ?>
            </td>
        </tr>
        <tr>
                        <?php include '../component/footer.php'; ?>

        </tr>
    </table>
</body>

</html>