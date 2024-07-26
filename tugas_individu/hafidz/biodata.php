<!DOCTYPE html>
<html>
    <head>
        <title>Tugas Pemrograman WebLanjut</title>
        <?php include "style.php"; ?>
    </head>
    <body>
        <table border="1px">
            <tr>
                <td colspan="2" style="text-align: center;">202143500686 - Hafidz al Fachridzi</td>
            </tr>
            <tr>
                <td>
                    <?php include "202143500686_list.php"; ?>
                </td>
                <td>
                    <h2>Form Biodata</h2>
                        <form action="action_post.php" method="POST">
                        <label for="nama">Nama:</label>
                        <input type="text" id="nama" name="nama" required><br />

                        <label for="umur">Umur:</label>
                        <input type="number" id="umur" name="umur" required><br />

                        <label>Jenis Kelamin:</label>
                        <input type="radio" id="laki" name="gender" value="laki-laki" required>
                        <label for="laki">Laki-laki</label>
                        <input type="radio" id="perempuan" name="gender" value="perempuan" required>
                        <label for="perempuan">Perempuan</label><br />

                        <label for="hobi">Hobi:</label>
                            <input type="checkbox" id="makan" name="hobi[]" value="makan">
                            <label for="makan">Makan</label>
                            <input type="checkbox" id="mandi" name="hobi[]" value="mandi">
                            <label for="mandi">Mandi</label>
                            <input type="checkbox" id="tidur" name="hobi[]" value="tidur">
                            <label for="tidur">Tidur</label></input><br />
                        
                        <label for="pendidikan">Pendidikan Terakhir:</label>
                        <select id="pendidikan" name="pendidikan" required>
                            <option value="">Pilih Pendidikan</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA/SMK">SMA/SMK</option>
                        </select><br />
                        
                        <label for="alamat">Alamat:</label>
                        <textarea id="alamat" name="alamat" rows="4" required></textarea><br />
                        <button type="submit">Submit</button>
                    </form>
                </td>
            </tr>
            <td colspan="2" style="text-align: center;"> Copyright @Hafidz al Fachridzi - 202143500686</td>
        </table>
    </body>
</html>