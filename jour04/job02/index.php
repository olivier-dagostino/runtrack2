
<?php


echo "
<table>
	<thead>
		<tr>
			<th>Arguments</th>
			<th>Valeurs</th>
		</tr>
	</thead>
	<tbody>";
	
		
foreach($_GET as $key => $valeur)
{
	echo "<tr><td>" . $key . "</td><td>" . $valeur . "</td></tr>";
}

echo "</tbody>
</table>";



$i = 0;  // commence à 0

foreach ($_GET as $key => $value) {     // 
    echo $key . " : " . $value."<br>";
    $i++;
}

echo "Il y a " . $i . " d'arguments GET";


 ?>
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta char-set="utf-8">
     <title>TEST PHP</title>
   </head>
   <body>
     <form action="" method="get">
       <input type="text" value="Le Php me prend la tête" name="myfield">
       <input type="text" value="Le Php me prend le choux" name="myfield2">
       <input type="submit" value = "post">
     </form>
   </body>
 </html>