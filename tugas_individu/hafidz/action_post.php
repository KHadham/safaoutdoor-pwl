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
                    <span >Nama:</span> <?php echo $_POST['nama']; ?><br />
                    <span >Umur:</span> <?php echo $_POST['umur']; ?><br />
                    <span >Jenis Kelamin:</span> <?php echo $_POST['gender']; ?><br />
                    <span >Hobi:</span> 
                        <?php 
                            if(isset($_POST['hobi'])) {
                                echo implode(", ", $_POST['hobi']);
                            }
                        ?><br />
                    <span >Pendidikan Terakhir:</span> <?php echo $_POST['pendidikan']; ?><br />
                    <span >Alamat:</span> <?php echo $_POST['alamat']; ?>
                </td>
            </tr>
            <td colspan="2" style="text-align: center;"> Copyright @Hafidz al Fachridzi - 202143500686</td>
        </table>
    </body>
</html>