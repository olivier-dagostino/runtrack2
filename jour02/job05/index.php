<?php

for ($i=2; $i <=1000 ; $i++) { //Il existe un variable $i allant de 2 à 1000

    $x=0;//et une variable $x = 0

    for ($j=1; $j <= $i ; $j++) {  // et une variable $j qui démarre à 1 et qui est toujours <= $i

        if ($i % $j == 0) {  // Si le reste du Modulo de $i % $j = 0
            $x++;   // alors on ajoute 1 à $x 
        }
    } // On veux que x s'arrette à 2 car les nombre premier sont uniquement divisible par 2 nombres (1 et eux même) 
    if ($x == 2) {  // SI $x == 2 alors
        echo $i."<br>";  // j'affiche $i avec un saut de ligne systématique
    }
} 