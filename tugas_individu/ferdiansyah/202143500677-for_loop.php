<!DOCTYPE html>
<html>
<head>
<body>
          <?php
		  if (!function_exists ('getContent')){
			  function getContent() {
            for ($counter = 1; $counter <= 10; $counter++) {
			echo "Perulangan ke-$counter<br>";
				}
			  }
		  }
          ?>
        </body>
  </head>
</html>