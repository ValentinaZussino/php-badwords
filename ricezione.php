<?php
$paragrafo = $_GET['paragrafo'];
$parola = $_GET['parola'];
$lungparag = strlen($paragrafo);
$replace = str_replace($parola,"***",$paragrafo);
$lungnuovo = strlen($replace);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ricezione Form</title>
</head>
<body>
    <p><?php echo "$paragrafo,  $lungparag" ?></p>
    <p><?php echo "$replace, $lungnuovo" ?></p>
</body>
</html>