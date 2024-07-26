<!DOCTYPE html>
<html>
<head>
<body>

          <?php
		  if (!function_exists ('getContent')){
			  function getContent() {
            $nilai = 70;
			if($nilai >=60)
				echo "Anda Lulus";
			Else
				echo "Anda Tidak Lulus";
			  }
		  }
          ?>
        
  </body>
  </head>
</html>
