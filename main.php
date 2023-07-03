<?php
    $frase = $_POST['frase'];
    $censurata = $_POST['censurata'];

    // $concat = $frase." ".$censurata;

    $replaced = str_replace($frase, '***', $censurata)."<br /><br />";

    $length_word = 'La lunghezza totale dei caratteri è pari a'." ".strlen($replaced);

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
    <h4>Parola da censurare:</h4>
    <p><?php echo $frase; ?></p>
    <h4>Testo originale:</h4>
    <p><?php echo $censurata ?></p>

    <h4>Testo censurato:</h4>
    <p><?php echo $replaced; ?></p>
    <h4>Lunghezza caratteri</h4>
    <p><?php echo $length_word ?></p>
</body>
</html>
