<!DOCTYPE html>
<html>
<head>
<body>
          <?php
		  if (!function_exists ('getContent')){
			  function getContent() {
            $counter = 1;
			while ($counter <= 10) {
				echo "Perulangan ke-$counter<br>";
				$counter++;
				}
			  }
		  }
          ?>
       </body>
  </head>
</html>