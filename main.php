<?php
    $frase = $_POST['frase'];
    $censurata = $_POST['censurata'];

    $concat = $frase." ".$censurata;


    

    echo str_replace('cacca', '***', $concat)."<br />";

    echo strlen($concat);

?>
