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
                <h5>ini halaman aritmatika_string</h5>
                <?php
                $teks1 = "Aku Sedang Belajar";
                $teks2 = "Pemrograman WEB 2";
                $teks3 = " Menggunakan PHP";

                $hasil = $teks1 . $teks2 . $teks3;
                printf("hasil : %s<br/>", $hasil);
                $hasil = $teks1 . "" . $teks2 . "" . $teks3;
                echo "hasil :" . $hasil;

                ?>
            </td>
        </tr>
        <tr>
            <?php include '../component/footer.php'; ?>
        </tr>
    </table>
</body>

</html>