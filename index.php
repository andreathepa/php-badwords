<?php
    echo "Hello world";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-badwords</title>
</head>
<body>
    <form action="main.php" method="POST">
        <input type="text" name="frase">
        <textarea type="text" name="censurata"></textarea>
        <input type="submit" value="invia">
    </form>
</body>
</html>