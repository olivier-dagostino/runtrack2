<?php
if (isset($_POST["Username"]) && isset($_POST["mdp"])) {
    if ( $_POST['Username'] == "John" && $_POST['mdp'] == "Rambo") 
    {
        echo "C'est pas ma guerre";
    }else {
        echo "Votre pire Cauchemar";
    }
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Formulaire html</title>
</head>
<body>
<form action="#" method="POST">
<p>Username :</p><input type="text" name="Username" required >
<p>Mot de passe :</p><input type="password" name="mdp" required>

<input type=submit value="Connexion">
</form>
</body>
</html>