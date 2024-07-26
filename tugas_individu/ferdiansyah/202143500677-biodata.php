<!DOCTYPE html>
<html>
<head>
<body>
<?php
function getContent() {
    ob_start();
    ?>
    <div class="biodata-container">
        <div class="biodata-photo">
            <img src="http://localhost/TUGAS INDIVIDU - FERDIYANSYAH_202143500677/img/Foto.jfif" alt="Your Photo">
        </div>
        <div class="biodata-details">
            <h2>BIODATA SAYA</h2>
            <p>Nama	: Ferdiyansyah</p>
            <p>NPM	: 202143500677</p>
			<p>Hobi	: Badminton & Travelling</p>
			
        </div>
    </div>
    <?php
    return ob_get_clean();
}
?>

</body>
</head>
</html>