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
<style>
        .form-label {
            display: block; /* Mengubah label menjadi blok untuk memudahkan styling */
            width: 200px; /* Lebar label sesuai kebutuhan */
            text-align: left; /* Teks rata kiri */
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
                        <label for="nama" class="form-label">Nama:</label>
                    </th>
                    <td><input type="text" id="nama" name="nama" required></td>
                </tr>
                <tr>
                    <th>
                        <label for="umur" class="form-label">Umur:</label>
                    </th>
                    <td><input type="number" id="umur" name="umur" required></td>
                </tr>
                <tr>
                    <th rowspan="2"><label class="form-label">Jenis Kelamin:</label></th>
                    <td>
                        <input type="radio" id="laki" name="gender" value="laki-laki" required>
                        <label for="laki">Laki-laki</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" id="perempuan" name="gender" value="perempuan" required>
                        <label for="perempuan">Perempuan</label><br />
                    </td>
                </tr>
                <tr>
                    <th rowspan="2"><label class="form-label">Hobi:</label></th>
                    <td>
                        <input type="checkbox" id="shopping" name="hobi" value="shopping">
                        <label for="hobi">shopping</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" id="traveling" name="hobi" value="traveling">
                        <label for="hobi">traveling</label>
                    </td>
                </tr>
                
                <tr>
                    <th>
                        <label for="pendidikan" class="form-label">Pendidikan Terakhir:</label>
                    </th>
                    <td>
                        <select id="pendidikan" name="pendidikan" required>
                            <option value="">Pilih Pendidikan</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA/SMK">SMA/SMK</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="alamat" class="form-label">Alamat:</label>
                    </th>
                    <td> <textarea id="alamat" name="alamat" rows="4" required></textarea></td>
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
        <h2>Biodata</h2>
        <div id="result">
            <?php
            if (isset($_POST["ok"])) {
                echo "Nama : " . $_POST["nama"] . "<br/>";
                echo "Umur : " . $_POST["umur"] . "<br/>";
                echo "Jenis Kelamin : " . $_POST["gender"] . "<br/>";
                echo "Hobi : " . $_POST["hobi"] . "<br/>";
                echo "Pendidikan Terakhir : " . $_POST["pendidikan"] . "<br/>";
                echo "Alamat : " . $_POST["alamat"];
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