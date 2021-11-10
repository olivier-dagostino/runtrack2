<?php

if (isset($_POST['reset'])) 
{
    unset($_COOKIE['nbvisites']);
    header ("Location: index.php");
}


if (isset($_COOKIE['nbvisites'])) {
    $i = $_COOKIE['nbvisites']+1;

}

else { 
    $i = 0;
}

setcookie('nbvisites',$i);

echo $_COOKIE['nbvisites'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="#" method="post">
        <input type="submit" value="reset" name="reset">
    </form>
</body>
</html>

