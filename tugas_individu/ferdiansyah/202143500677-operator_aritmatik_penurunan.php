<!DOCTYPE html>
<html>
<head>
<body>

<?php
if (!function_exists('getContent')){
	function getContent(){
		
            $bill1 = 100;
			$bill2 = 25;
			
			$hasil = $bill1 + $bill2;
			echo "$bill1 + $bill2 = $hasil<br/>";
			
			$hasil = $bill1 - $bill2;
			echo "$bill1 - $bill2 = $hasil<br/>";
			
			$hasil = $bill1 * $bill2;
			echo "$bill1 * $bill2 = $hasil<br/>";
			
			$hasil = $bill1 / $bill2;
			echo "$bill1 / $bill2 = $hasil<br/>";
			
			$hasil = $bill1 % $bill2;
			echo "$bill1 % $bill2 = $hasil<br/>";
			
			$hasil = $bill1++;
			echo "$bill1++ = $hasil<br/>";
			
			$hasil = $bill2--;
			echo "$bill2-- = $hasil<br/>";
	}
}
			
          ?>
		   </body>
</head>
</html>
