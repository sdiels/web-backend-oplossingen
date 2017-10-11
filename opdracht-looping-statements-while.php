<?php

$boodschappenLijstje = array("melk", "vlees", "eieren", "vis");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>looping statements while</title>
</head>
<body>
    
    <h1>deel 1:</h1>
    <p><?php    $x = 0;
                while($x < 100){
                    $x = $x + 1;
                    echo $x.", ";
                }                   ?></p>
    
    <h1>deel 2:</h1>
    <ul>
        <?php $counter = 0 ?>
        <?php while($counter < count($boodschappenLijstje)): ?>
        <li><?php echo $boodschappenLijstje[$counter] ?></li>
        <?php $counter++ ?>
        <?php endwhile ?>
    </ul>
    
</body>
</html>