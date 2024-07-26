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
     
      <?php
      include '../component/header.php';      ?>

    </tr>
    <tr>
      <td colspan="1">
        <h5>ini halaman home</h5>
        <p>home</p>
      </td>
    </tr>
    <tr>
      <td colspan="5" class="centered">
        <h3>
          Tugas Pemrograman Web Lanjut
        </h3>
        
      </td>
    </tr>
  </table>
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