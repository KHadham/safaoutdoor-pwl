<?php
if (!function_exists('getContent')) {
    function getContent() {
        $nama = "Ferdi";
        $usia = 28;
        $hobi = array("Badminton", "Travelling");

        echo "$nama berusia $usia tahun<br/>";
        // Ferdi berusia 28 tahun

        echo "Hobinya: $hobi[0], $hobi[1]";
        // Hobinya: Badminton, Travelling
    }
}
?>
