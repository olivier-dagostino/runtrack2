<?php   

for ($var=0; $var <= 100 ; $var++) { 

    if ($var <=20) {
      echo "<i>$var</i><br>";
    }

    elseif ($var >= 25 && $var <= 50 && $var!=42) {
        echo "<u>$var</u><br>";

    }

    elseif ($var == 42) {
        echo "La Plateforme_<br>";
    }

    else {
        echo "$var<br>";
    }

}