<?php
if (!function_exists('getContent')) {
    function getContent() {
		
            $bil1 = 100;
			$bil2 = 20;
			$teks1 = "PHP";
			$teks2 = "PHP";
			
			printf("%d == %d hasilnya %d<br/>",$bil1, $bil2, $bil1 == $bil2);
			//100 == 20 hasilnya 0
			printf("%d != %d hasilnya %d<br/>",$bil1, $bil2, $bil1 != $bil2);
			//100 != 20 hasilnya 1
			printf("%d >= %d hasilnya %d<br/>",$bil1, $bil2, $bil1 >= $bil2);
			//100 >= 20 hasilnya 1
			printf("%s == %s hasilnya %d<br/>",$teks1, $teks2, $teks1 == $teks2);
			//PHP == PHP hasilnya 0
			printf("%s != %s hasilnya %d<br/>",$teks1, $teks2, $teks1 != $teks2);
			//PHP != PHP hasilnya 1	
	}
}	
?>