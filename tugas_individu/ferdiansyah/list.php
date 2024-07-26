    <div class="sidebar">
        <a href="index.php?page=home">HOME</a>
		<a href="index.php?page=biodata">Biodata</a>
        <a href="index.php?page=variable">VariabelPHP</a>
        <a href="index.php?page=konstanta">KonstantaPHP</a>
        <a href="index.php?page=operator_aritmatik_penurunan">OPERATOR ARITMATIK Penaikan/penurunan PHP</a>
        <a href="index.php?page=operator_aritmatik_pembanding">OPERATOR ARITMATIK Pembanding PHP</a>
        <a href="index.php?page=operator_string">OPERATOR String PHP</a>
        <a href="index.php?page=if_else">Struktur Kondisi IF-Else PHP</a>
        <a href="index.php?page=if_elseif_else">Struktur Kondisi IF-Else If-Else PHP</a>
        <a href="index.php?page=switch_case">Struktur kondisi Switch-Case PHP</a>
        <a href="index.php?page=while_loop">Struktur Perulangan While Loop PHP</a>
        <a href="index.php?page=do_while_loop">Struktur Perulangan Do - While Loop PHP</a>
        <a href="index.php?page=for_loop">Struktur Perulangan For Loop PHP</a>
        <a href="index.php?page=foreach_loop">Struktur Perulangan Foreach-Loop PHP</a>
		<a href="index.php?page=form_biodata">Form Biodata</a>
		<a href="index.php?page=form_table">Form Buat Table</a>
		<a href="index.php?page=form_nilai">Form Konversi Nilai</a>
		
        
    </div>

    <main class="content">
        <div class="main-content">
            <?php
            function getContentFromPage($page) {
                $path = "202143500677-" . $page . ".php";
                if (file_exists($path)) {
                    include $path;
                    if (function_exists('getContent')) {
                        return getContent();
                    } else {
                        return "Fungsi getContent tidak ditemukan di $path.";
                    }
                } else {
                    return "Halaman $page tidak ditemukan.";
                }
            }

            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
            echo getContentFromPage($page);
            ?>
        </div>
    </main>