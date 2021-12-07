
<?php


$i = 0;  // commence à 0

foreach ($_POST as $key => $value) {     // 
    echo $key . " : " . $value."<br>";
    $i++;
}

echo "Il y a " . $i . " d'arguments POST";


 ?>
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta char-set="utf-8">
     <title>TEST PHP</title>
   </head>
   <body>
     <form action="" method="POST">
       <input type="text" value="Le Php me prend la tête" name="myfield">
       <input type="text" value="Le Php me prend le choux" name="myfield2">
       <input type="submit" value = "POST">
     </form>
   </body>
 </html>