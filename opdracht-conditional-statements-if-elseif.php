<?php

$getal = 25;
$max = null;
$min = null;

if ($getal > 90) {
    $min = 90;
}else if ($getal > 80 && $getal < 90){
    $min = 80;
}else if ($getal > 70 && $getal < 80){
    $min = 70;
}else if ($getal > 60 && $getal < 70){
    $min = 60;
}else if ($getal > 50 && $getal < 60){
    $min = 50;
}else if ($getal > 40 && $getal < 50){
    $min = 40;
}else if ($getal > 30 && $getal < 40){
    $min = 30;
}else if ($getal > 20 && $getal < 30){
    $min = 20;
}else if ($getal > 10 && $getal < 20){
    $min = 10;
}else if ($getal > 0 && $getal < 10){
    $min = 0;
}
$max = $min + 10;

$tekst = "Het getal ".$getal." ligt tussen ".$min." en ".$max;

$omgekeerd	=	strrev($tekst);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>if-elseif</title>
</head>
<body>
   
   <h1>deel 1:</h1>
   <p><?php echo $tekst ?></p>
   
   <h1>deel 2:</h1>
   <p><?php echo $omgekeerd ?></p>
   
    
</body>
</html>