<!-- Passare come parametri GET name, mail e age e
verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola
e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if (strlen($name) >= 3 && strpos($mail, '@') !== false  && strpos($mail, '.') !== false && is_numeric($age)) {
        echo 'La formattazione dei dati è corretta, procedi pure!';
    } else {
        echo 'Il permesso ti è negato, riprova ad inserire i dati!';
    }

// ?name=thom&mail=vent@mail.com&age=32 stringa da inserire nell'URL di prova

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
    
</body>
</html>