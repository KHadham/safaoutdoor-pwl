<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header {
            overflow: hidden;
            background-color: #f1f1f1;
            padding: 20px 10px;
        }

        .header a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }

        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }

        .header a:hover {
            background-color: #ddd;
            color: black;
        }

        .header a.active {
            background-color: dodgerblue;
            color: white;
        }

        .header-right {
            float: right;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 8px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }

            .header-right {
                float: none;
            }
        }
    </style>
    <!-- 
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link href="../assets/js/bootstrap.min.js" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- <script src="../assets/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="variable.php">variable.php</a></li>
            <li><a href="variable_object.php">variable_object.php</a></li>
            <li><a href="konstanta.php">konstanta.php</a></li>
            <li><a href="aritmatika.php">aritmatika.php</a></li>
            <li><a href="aritmatika_perbandigan.php">aritmatika_perbandigan.php</a></li>
            <li><a href="aritmatika_string.php">aritmatika_string.php</a></li>
            <li><a href="if.php">if.php</a></li>
            <li><a href="if_else.php">if_else.php</a></li>
            <li><a href="switch.php">switch.php</a></li>
            <li><a href="while_loop.php">while_loop.php</a></li>
            <li><a href="do_while_loop.php">do_while_loop.php</a></li>
            <li><a href="for_loop.php">for_loop.php</a></li>
            <li><a href="foreach_loop.php">foreach_loop.php</a></li>
            <li><a href="function.php">function.php</a></li>
            <li><a href="function2.php">function2.php</a></li>
            <li><a href="call_by_reference.php">call_by_reference.php</a></li>
            <li><a href="call_by_value.php">call_by_value.php</a></li>
            <li><a href="p5_biodata_form.php">p5_biodata_form.php</a></li>
            <li><a href="p5_konversi_nilai.php">p5_konversi_nilai.php</a></li>
            <li><a href="p5_tabel_creator.php">p5_tabel_creator.php</a></li>
        </ul>
    </div>
    <div class="header">
        <a href="#default" onclick="openNav()" class="logo">❖ 202143500571 - Khadam Ikhwanus</a>
        <div class="header-right">
            <a href="home.php">Home</a>
            <a href="biodata.php">Biodata</a>
        </div>
    </div>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "30%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</body>

</html>