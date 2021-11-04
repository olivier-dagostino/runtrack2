<?php   

$str = "Tous ces instants seront perdus dans le temps comme les larmes sur la pluie";  
// on démarre par une chaine de caractères nommé $str


for ( $x = 0 ; isset( $str[$x] ) == True; $x++) {  // pour  la $str, on a $x =0 et qui se déplace dans $str, qui s'arrette à la fin de cette chaine de caractères
    if ($x % 2 == 0) { // donc Si le modulo de $x % 2 == 0
        echo $str[$x]; // Alors j'affiche $x qui à sauté une lettre sur deux.
    }
}

?>