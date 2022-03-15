<!-- ## Snack 5
Prendere un testo abbastanza lungo, contenente diverse frasi.
Prendere il testo e suddividerlo in tanti
paragrafi ogni volta in cui si incontrerà un punto 'esclamativo(mia modifica personale)'. -->
<?php

$myParagraph = "Figli di Gondor! Di Rohan! Fratelli miei! Vedo nei vostri occhi la stessa paura che potrebbe afferrare il mio cuore! Ci sarà un giorno, in cui il coraggio degli uomini cederà, in cui abbandoneremo gli amici e spezzeremo ogni legame di fratellanza, ma non è questo il giorno! Ci sarà l'ora dei lupi e degli scudi frantumati quando l'era degli uomini arriverà al crollo, ma non è questo il giorno! Quest'oggi combattiamo! Per tutto ciò che ritenete caro su questa bella terra, v'invito a resistere! Uomini dell'Ovest!";
$myDelimiter = "!";

$myNewParagraph = explode($myDelimiter, $myParagraph);

//ciclo for per visualizzare interno dell'array
 for ($i=0; $i < count($myNewParagraph); $i++) {
     echo "<p>$myNewParagraph[$i]! </p>";
 }

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

<h3>Discorso originale</h3>
<?php echo $myParagraph ?>

<h3>Discorso formattato</h3>
<?php echo "<p>$myNewParagraph[$i] . '!' . '<br>'</p>" ?> 
    
</body>
</html>