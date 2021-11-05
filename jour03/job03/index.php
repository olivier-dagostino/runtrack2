<?php


$str = "I'm sorry Dave I'm afraid I can't do that";  
// on démarre par une chaine de caractères nommé $str
//$i est la valeur de l'emplacement

for ( $i = 0 ; isset( $str[$i] ) == True; $i++) {  
    
    // pour  la $str, on a $x =0 et qui se déplace dans $str,
    // qui s'arrette à la fin de cette chaine de caractères


    if ($str [$i] == 'A' || $str [$i] == 'E' || $str [$i] == 'I' || $str [$i] == 'O' || $str [$i] == 'U' || $str [$i]== 'Y' || $str [$i] == 'a' || $str [$i] == 'e' || $str [$i] == 'i' || $str [$i] == 'o' || $str [$i] == 'u' || $str [$i]== 'y' ) {
        echo $str[$i];
    }
}
