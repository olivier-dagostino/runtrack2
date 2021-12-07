<?php

 var_dump($_POST);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Formulaire html</title>
</head>
<body>
<form action="#" method="POST">
<p>Votre nom :</p><input type="text1" name="Nom" required>
<p>Votre Prénom :</p><input type="text" name="Prenom" required>
<p>Date :</p><input type="date" name="Date" required>

<input type=submit value="Envoyer">
</form>
<main>
<table>
    <thead>
        <tr>
            <th>Argument</th>
            <th>Valeur</th>
        </tr>
        
    </thead>
    <tbody>
        <?php 
        foreach ($_POST as $key => $value)  // pour chaque variable récupéré en POST dans les inputs
        {
            echo '
            <tr>
            <td>'.$key.'</td>  
            <td>'.$value.'</td>
        </tr>
            ';
        }

        ?>

    </tbody>
</table>
<main>
    <footer></footer>
</body>
</html>

<style>
    table,
td {
    border: 5px solid #333;

    color: black;

}

th {
    border: 5px solid #333;
}
<style>
