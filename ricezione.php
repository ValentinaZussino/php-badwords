<?php
$paragrafo = $_GET['paragrafo'];
$parola = $_GET['parola'];
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
    <p><?php echo $paragrafo; ?></p>
    <p><?php echo strlen($paragrafo); ?></p>
</body>
</html>