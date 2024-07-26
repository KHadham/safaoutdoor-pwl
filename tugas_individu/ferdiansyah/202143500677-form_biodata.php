<!DOCTYPE html>
<html lang="en-US" style="height: auto; min-height: 100%;">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas 1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
if (!function_exists('getContent')) {
    function getContent() {
        echo '
        <main class="content_formbio">
            <div class="main_content_formbio">
                <form action="index.php?page=proses_biodata" method="POST">
                    <table>
                        <h2>FORM BIODATA</h2>
                        <tr>
                            <td>Nama</td>
                            <td>: <input type="text" name="nama"></td>
                        </tr>
                        <tr>
                            <td>Umur</td>
                            <td>: <input type="number" name="umur"></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>
                                : <input type="radio" name="gender" value="Pria">Pria
                                <input type="radio" name="gender" value="Wanita">Wanita
                            </td>
                        </tr>
                        <tr>
                            <td>Hobi</td>
                            <td>
                                : <input type="checkbox" name="hobi[]" value="Hiking">Hiking
                                <input type="checkbox" name="hobi[]" value="Travelling">Travelling
                                <input type="checkbox" name="hobi[]" value="Badminton">Badminton
                            </td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>:
                                <select name="pendidikan">
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="D1">D1</option>
                                    <option value="D2">D2</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat </td>
                            <td>
                                <textarea name="alamat"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" value="SUBMIT">
                                <input type="reset" value="RESET">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </main>';
    }
}
?>

</body>
</html>
