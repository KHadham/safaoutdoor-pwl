<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <style>
        #main {
            display: flex;
            flex-direction: column;
            padding: 50px;
            border-style: dotted;
        }
    </style>
</head>

<body>
    <?php
    include '../component/header.php';
    ?>

    <div id="main">
        <h2>Form</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" onreset="clearBiodata()">
            <table>
                <tr>
                    <th>
                        <label for="baris">baris:</label>
                    </th>
                    <td><input type="number" id="baris" name="baris" required></td>
                </tr>
                <tr>
                    <th>
                        <label for="kolom">kolom:</label>
                    </th>
                    <td><input type="number" id="kolom" name="kolom" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" name="ok" value="OK">Submit</button>
                        <button type="reset">Reset</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div id="main">
        <h2>tabel</h2>
        <div id="result">
            <?php
            if (isset($_POST["ok"])) {
                $baris = (int)$_POST["baris"];
                $kolom = (int)$_POST["kolom"];
                echo "<table border='1'>";
                for ($i = 0; $i < $baris; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < $kolom; $j++) {
                        echo "<td>Baris ke " . ($i + 1) . " Kolom ke " . ($j + 1) . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
            ?>
        </div>
    </div>
    <script>
        function clearBiodata() {
            document.getElementById('result').innerHTML = "";
        }
    </script>
</body>

</html>