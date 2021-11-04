<?php   

$nbr = [200, 204, 173, 98, 404, 459]; // Il existe une variable $nbr comprenant des nombres
$x = 0 ; // et une variable $x qui est égale à 0 et

for ($x=0; isset($nbr[$x]) == True; $x++) { // qui se déplace dans la première variable $nbr

    if ($nbr[$x] % 2 == 0) { // si le modulo de ($nbr[$x]) est strictement égale à 0 
        echo $nbr[$x] ."Est Pair<br>"; // alors j'affiche "est pair" pour les nombres pairs 
    }
    else {
        echo $nbr[$x] ."Est Impaire<br>"; // Sinon j'affiche "est impair" pour les nombre impairs
    }
}

?>
