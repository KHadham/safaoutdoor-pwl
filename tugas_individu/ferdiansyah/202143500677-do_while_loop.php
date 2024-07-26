<!DOCTYPE html>
<html>
<head>
<body>
          <?php
		  if (!function_exists ('getContent')){
			  function getContent() {
            $counter = 1;
				do {
				echo "Perulangan ke-$counter<br>";
				$counter++;
				} while ($counter <= 10);
			  }
		  }
          ?>
        </body>
  </head>
</html>