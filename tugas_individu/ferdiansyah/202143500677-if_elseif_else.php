<!DOCTYPE html>
<html>
<head>
<body>
          <?php
		  if (!function_exists ('getContent')){
			  function getContent (){
            $nilai = 75;
			if ($nilai >= 85) {
				echo "Nilai Anda adalah A";
				} elseif ($nilai >= 70) {
				echo "Nilai Anda adalah B";
				} elseif ($nilai >= 60) {
				  echo "Nilai Anda adalah C";
				} elseif ($nilai >= 50) {
				echo "Nilai Anda adalah D";
				} else {
				echo "Nilai Anda adalah E";
				}
			  }
		  }
          ?>
        </body>
</head>
</html>