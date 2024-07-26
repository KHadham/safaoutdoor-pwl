<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <style>
        #main {
            display: flex;
            flex-direction: row;
        }

        #biodata {
            background-color: #FFFF3F;
            padding: 88px;
            width: 100%;
        }
    </style>
</head>

<body>
<style>
        .photo-frame {
            border: 5px solid #ccc; /* Warna dan lebar border */
            padding: 10px; /* Jarak antara foto dan border */
            display: inline-block; /* Agar border tidak mengambil seluruh lebar */            
        }
    </style>
<style>
        .biodata-frame {
            border: 5px solid #ccc; /* Warna dan lebar border */
            padding: 10px; /* Jarak antara foto dan border */
            margin-left: 10px;
            width: 100%;
        }
    </style>    

    <?php
    include '../component/header.php';
    ?>
    <div id="main">
    <div class="photo-frame">
        <img src="../assets/ajimas.JPG" alt="Girl asdasds a jacket" width="500" height="700">
        </div>
        <div class="biodata-frame">
        <div id="biodata">
            <h3>Biodata Diri</h3>
            <p>Nama: Ajimas ridwan</p>
            <p>Jenis Kelamin: Laki-laki</p>
            <p>NPM: 202143500590</p>
            <p>Kelas: Y6F</p>
            <p>Usia: 30</p>
            <p>Hobi: Gaming</p>
            <p>Alamat: Jakarta Utara</p>
            <p>Golongan Darah: O</p>
            <p>Tanggal Lahir: 1991-11-20</p>
            <p>Berat Badan: 55 Kg</p>
            <p>Tinggi Badan: 170 cm</p>
            <p>Rambut: Polem</p>
            <p>Warna Kulit: Sawo matang</p>
            </div>    
        </div>
    </div>
</body>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        /* CSS untuk footer */
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .footer-container {
            text-align: center;
        }
        .footer-container ul {
            list-style-type: none;
            padding: 0;
        }
        .footer-container ul li {
            display: inline-block;
            margin: 0 10px;
        }
        .footer-container ul li a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    
    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <p>&copy; Pemrograman Web Lanjut. Ajimas ridwan.</p>
        </div>
    </footer>
</body>

</html>