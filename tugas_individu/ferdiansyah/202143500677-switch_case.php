<!DOCTYPE html>
<html>
<head>
<body>
          <?php
		  if (!function_exists ('getContent')){
			  function getContent() {
            $hari = "Selasa";

switch ($hari) {
    case "Senin":
        echo "Hari ini adalah Senin";
        break;
    case "Selasa":
        echo "Hari ini adalah Selasa";
        break;
    case "Rabu":
        echo "Hari ini adalah Rabu";
        break;
    case "Kamis":
        echo "Hari ini adalah Kamis";
        break;
    case "Jumat":
        echo "Hari ini adalah Jumat";
        break;
    case "Sabtu":
        echo "Hari ini adalah Sabtu";
        break;
    case "Minggu":
        echo "Hari ini adalah Minggu";
        break;
    default:
        echo "Hari tidak valid";
			}
			  }
		  }

          ?>
        </body>
  </head>
</html>
