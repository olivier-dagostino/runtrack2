<?php

$bdd = mysqli_connect("localhost","root","root","jour08");

$req = mysqli_query($bdd, "SELECT * FROM etudiants");

$res = mysqli_fetch_all($req);

var_dump($res);
?>