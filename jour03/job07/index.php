<?php

//Créer une chaîne str qui contient “Certaines choses changent, et d'autres
// ne changeront jamais.”. Créer un algorithme qui parcourt cette string en
// remplaçant le premier caractère par le deuxième, le deuxième par le
// troisième etc.. et le dernier par le premier.


$str ="Certaines choses changent et d'autres ne changeront jamais";


    for ($i = 0 ; isset ($str[$i])  == True; $i++){
        if (!isset($str[$i+1])) {
            echo $str[0];
        } 
        else {
            echo    $str[$i +1 ] ;   
        }
    }
 // La valeur de $str 0 sera remplacer par la valeur de $str [$i +1]
    

?>