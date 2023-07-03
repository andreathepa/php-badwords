<?php
    $frase = $_POST['frase'];
    $censurata = $_POST['censurata'];

    $concat = $frase." ".$censurata;


    

    echo str_replace('cacca', '***', $concat)."<br /><br />";
    

    echo $length_word = 'La lunghezza totale dei caratteri è pari a'." ".strlen($concat);

?>
