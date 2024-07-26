<!DOCTYPE html>
<html lang="en-US" style="height: auto; min-height: 100%;">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Output Biodata</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
if (!function_exists('getContent')) {
    function getContent() {
        ?>
        <main class="content_formbio">
            <div class="main_content_formbio">
                <h2>OUTPUT BIODATA</h2>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>: <?php echo htmlspecialchars($_POST['nama']); ?></td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>: <?php echo htmlspecialchars($_POST['umur']); ?></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>: <?php echo htmlspecialchars($_POST['gender']); ?></td>
                    </tr>
                    <tr>
                        <td>Hobi</td>
                        <td>: 
                            <?php 
                            if (!empty($_POST['hobi'])) {
                                echo htmlspecialchars(implode(", ", $_POST['hobi']));
                            } else {
                                echo "Tidak ada hobi yang dipilih.";
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>: <?php echo htmlspecialchars($_POST['pendidikan']); ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: <?php echo nl2br(htmlspecialchars($_POST['alamat'])); ?></td>
                    </tr>
                </table>
            </div>
        </main>
        <?php
    }
}
?>

</body>
</html>
