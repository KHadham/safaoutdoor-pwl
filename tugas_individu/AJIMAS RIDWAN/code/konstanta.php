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
                <h5>ini halaman konstanta</h5>
                <?php
                define('JUDUL', 'Hitung Luas Lingkaran');
                define('PHI', '3.14');

                echo JUDUL;

                $r = 10;
                echo "<br>Jari-Jari :$r<br />";

                $luas = PHI * $r * $r;
                echo "Luas Lingkaran = $luas";

                ?>
            </td>
        </tr>
        <tr>
                        <?php include '../component/footer.php'; ?>

        </tr>
    </table>
</body>

</html>