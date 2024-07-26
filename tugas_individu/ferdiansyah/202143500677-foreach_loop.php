<!DOCTYPE html>
<html>
<head>
<body>
          <?php
		  if (!function_exists ('getContent')){
			  function getContent() {
            $buah = array("Apel", "Jeruk", "Mangga", "Pisang", "Anggur");
			foreach ($buah as $item) {
			echo "Buah: $item<br>";
				}
			  }
		  }
          ?>
        </body>
  </head>
</html>