<?php

if (isset($_COOKIE['nbvisites'])) {
    $i = $_COOKIE['nbvisites']+1;

}

else { 
    $i = 0;
}

setcookie('nbvisites',$i);

echo $_COOKIE['nbvisites'];




?>