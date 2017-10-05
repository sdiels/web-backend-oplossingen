<?php

$fruit = 'kokosnoot';
$lengteFruit = strlen($fruit);
$posEersteO = strpos($fruit, 'o') + 1;

$fruit2 = 'ananas';
$posLaatsteA = strrpos($fruit2, 'a') + 1;
$caps = strtoupper($fruit2);

$lettertje = 'e';
$cijfertje = '3';
$langsteWoord = 'zandzeepsodemineralenwatersteenstralen';
$vervangen = str_replace($lettertje, $cijfertje, $langsteWoord);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>opdracht string extra functions</title>
</head>
<body>
    <h1>deel1:</h1>
    
    <p>string: <?php echo $fruit ?></p>
    <p>lengte string: <?php echo $lengteFruit ?></p>
    <p>positie van de eerste o: <?php echo $posEersteO ?></p>
    
    <h1>deel2:</h1>
    
    <p>string: <?php echo $fruit2 ?></p>
    <p>positie van de laatste a: <?php echo $posLaatsteA ?></p>
    <p>string in hoofdletters: <?php echo $caps ?></p>
    
    <h1>deel3:</h1>
    
    <p>langste woord: <?php echo $langsteWoord ?></p>
    <p>langste woord met alle e's vervangen door 3's: <?php echo $vervangen ?></p>
    
    
</body>
</html>