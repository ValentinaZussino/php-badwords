<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Prova PHP form</title>
</head>
<body>
    <h1>Form php</h1>
    <form action="ricezione.php" method="GET">
        <!-- <input type="text" name="paragrafo" placeholder="Immetti un testo"> -->
        <textarea name="paragrafo" id="" cols="30" rows="10" placeholder="Immetti un testo"></textarea>
        <input type="text" name="parola" placeholder="Parola da censurare">
        <button type="submit">Invia</button>
    </form>
</body>
</html>