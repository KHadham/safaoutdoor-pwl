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
            background-color: gray;
            padding: 50px;
            width: 100%;
        }
    </style>
</head>

<body>
    <?php
    include '../component/header.php';
    ?>
    <h2>Hasil Form Biodata</h2>
    <button type="button" id="backButton" onclick="goBack()">Back</button>

   
    <?php
    if (isset($_POST["ok"])) {
        echo "Nama : " . $_POST["nama"] . "<br/>";
        echo "Umur : " . $_POST["umur"];
    }
    ?>
</body>

</html>
 <script>
        function goBack() {
            window.history.back();
        }
    </script>