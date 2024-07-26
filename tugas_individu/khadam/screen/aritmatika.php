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
            include '../component/header.php';            ?>

        </tr>
        <tr>
            
            <td colspan="1">
                <h5>ini halaman aritmatika</h5>
                <?php
                $bil1 = 110;
                $bil2 = 25;

                $hasil = $bil1 + $bil2;
                echo "$bil1 + $bil2 = $hasil<br/>";

                $hasil = $bil1 - $bil2;
                echo "$bil1 - $bil2 = $hasil<br/>";

                $hasil = $bil1 * $bil2;
                echo "$bil1 * $bil2 = $hasil<br/>";

                $hasil = $bil1 / $bil2;
                echo "$bil1 / $bil2 = $hasil<br/>";

                $hasil = $bil1 % $bil2;
                echo "$bil1 % $bil2 = $hasil<br/>";

                $hasil = $bil1++;
                echo "$bil1++ = $hasil<br/>";

                $hasil = $bil2++;
                echo "$bil2++ = $hasil<br/>";

                ?>
            </td>
        </tr>
        <tr>
                        <?php include '../component/footer.php'; ?>

        </tr>
    </table>
</body>

</html>