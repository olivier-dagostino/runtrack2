<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php


if(!isset($_COOKIE['nbvisites'])){
$value = 0;
}

else{
$value=$_COOKIE['nbvisites'] ;

}
$value++;
setcookie('nbvisites', $value);
echo $_COOKIE['nbvisites'];

?>

<form action="#" method="post">
<input type="submit" value="reset" name="reset">
</body>
</html>