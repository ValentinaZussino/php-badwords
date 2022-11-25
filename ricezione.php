<?php
// $paragrafo = $_GET['paragrafo'];
// $parola = $_GET['parola'];
// $lungparag = strlen($paragrafo);
// $replace = str_replace($parola,"***",$paragrafo);
// $lungnuovo = strlen($replace);

if(isset($_GET['paragrafo']) && $_GET['paragrafo'] != ''){
    $paragrafo = $_GET['paragrafo'];
    $lungparag = strlen($paragrafo);
}else{
    $paragrafo = 'Inserisci un testo per favore';
    $lungparag = '';
} 

if(isset($_GET['parola']) && $_GET['parola'] != '' && $_GET['paragrafo'] != ''){
    $parola = $_GET['parola'];
    $replace = str_replace($parola,"***",$paragrafo);
    $lungnuovo = strlen($replace);
}else if (isset($_GET['parola']) && $_GET['parola'] != '' && $_GET['paragrafo'] == ''){
    $paragrafo = 'Inserisci un testo per favore';
    $parola = $_GET['parola'];
    $replace = '';
    $lungnuovo = '';
}else{
    $replace = 'Inserisci una parola per favore';
    $lungnuovo = '';
} 


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
    <p><?php echo "$paragrafo $lungparag" ?></p>
    <p><?php echo "$replace $lungnuovo" ?></p>
</body>
</html>