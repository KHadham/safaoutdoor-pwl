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
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" onreset="clearBiodata()">
            <table>
                <tr>
                    <th>
                        <label for="nilai">Masukan Nilai:</label>
                    </th>
                    <td><input type="text" id="nilai" name="nilai" required></td>
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
        <h2>Hasil Nilai</h2>
        <div id="result">
            <?php
            if (isset($_POST["ok"])) {
                $nilai = $_POST['nilai'];
                if ($nilai >= 85 && $nilai <= 100) {
                    $hasil = "A";
                } elseif ($nilai >= 70 && $nilai <= 84) {
                    $hasil = "B";
                } elseif ($nilai >= 60 && $nilai < 70) {
                    $hasil = "C";
                } elseif ($nilai >= 50 && $nilai < 60) {
                    $hasil = "D";
                } elseif ($nilai < 50) {
                    $hasil = "E";
                } else {
                    $hasil = "Nilai tidak valid";
                }
                echo "Nilai angka <strong>$nilai</strong> setara dengan nilai huruf <strong>$hasil</strong>.";
            }
            ?>

        </div>
    </div>
</body>
<script>
    function clearBiodata() {
        document.getElementById('result').innerHTML = "";
    }
</script>

</html>