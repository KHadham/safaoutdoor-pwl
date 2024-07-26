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
            <td colspan="5" class="centered">
                <h3>202143500571 - Khadam Ikhwanus</h3>
            </td>

        </tr>
        <tr>
            
            <td colspan="1">
                <h5>ini halaman Hello World</h5>
                <p>Hello World</p>
            </td>
        </tr>
        <tr>
                        <?php include '../component/footer.php'; ?>

        </tr>
    </table>
</body>

</html>