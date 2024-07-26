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
                <h5>ini halaman call by ref</h5>
                <?php
                function nilaiKuadrat(&$nilai)
                {
                    $nilai = $nilai * $nilai;
                }

                $bil = 3;
                echo "Nilai = " . $bil;

                nilaiKuadrat($bil);
                echo "Nilai = " . $bil;
                ?>
            </td>
        </tr>
        <tr>
            <?php include '../component/footer.php'; ?>
        </tr>
    </table>
</body>

</html>