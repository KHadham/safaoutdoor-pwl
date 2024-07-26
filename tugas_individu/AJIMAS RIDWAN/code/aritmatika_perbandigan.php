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
                <h5>ini halaman aritmatika_perbandigan</h5>
                <?php
                $bil1 = 100;
                $bil2 = 20;
                $teks1 = "PHP";
                $teks2 = "php";

                printf("%d == %d hasilnya %d<br/>", $bil1, $bil2, $bil1 == $bil2);
                printf("%d != %d hasilnya %d<br/>", $bil1, $bil2, $bil1 != $bil2);
                printf("%d >= %d hasilnya %d<br/>", $bil1, $bil2, $bil1 >= $bil2);
                printf("%s == %s hasilnya %d<br/>", $teks1, $teks2, $teks1 == $teks2);
                printf("%s != %s hasilnya %d<br/>", $teks1, $teks2, $teks1 != $teks2);
                ?>
            </td>
        </tr>
        <tr>
            <?php include '../component/footer.php'; ?>
        </tr>
    </table>
</body>

</html>