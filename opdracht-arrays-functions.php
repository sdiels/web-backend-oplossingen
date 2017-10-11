<?php

$dieren = array("aap", "tijger", "leeuw", "papegaai", "hamster", "parkiet");
$aantalDieren = count($dieren);

$teZoekenDier = "aap";
$dierGevonden = in_array($teZoekenDier, $dieren);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>arrays functions</title>
</head>
<body>
   
   <h1>deel 1:</h1>
   <p>aantal dieren: <?php echo $aantalDieren ?></p>
   <p>dier <?php echo $teZoekenDier ?> is <?php if ($dierGevonden == true){echo "gevonden";}else{echo "niet gevonden";} ?></p>
    
</body>
</html>