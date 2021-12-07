<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Formulaire html</title>
</head>
<body>
<form action="#" method="GET">
<p>Nombre</p><input type="number" name="number" required >
 <input type=submit value="Envoyer">
 <?php
 if(isset($_GET['number']))
 {
 if($_GET['number'] %2==0){
 echo 'c est un nombre pair';
 }
 else{
 echo'c est un nombre impair';
 }
 
}