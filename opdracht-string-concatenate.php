<?php

$naam = "Stefan";
$familieNaam = "Diels";

$volledigeNaam = $naam." ".$familieNaam;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>oprdacht-string-concatenate</title>
</head>
<body>
   
   <p>naam: <?php echo $volledigeNaam ?></p>
   <p>aantal karakters in mijn naam: <?php echo strlen($volledigeNaam) ?> karakters</p>
    
</body>
</html>