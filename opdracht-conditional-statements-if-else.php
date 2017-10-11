<?php

$jaartal = 2012;
$schrikkeljaar = null;
if ($jaartal%4 == 0 && $jaartal%100 != 0) {
    $schrikkeljaar = true;
}else {
    if ($jaartal%400 == 0) {
        $schrikkeljaar = true;
    }else {
        $schrikkeljaar = false;
    }
}

$seconden = 1255224269;
$minuten = $seconden / 60;
$uren = $minuten / 60;
$dagen = $uren / 24;
$weken = $dagen / 7;
$maanden = $dagen / 31;
$jaren = $maanden / 12;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>if-else</title>
</head>
<body>
   
   <h1>deel 1:</h1>
   <p>Is het jaar <?php echo $jaartal ?> een schrikkeljaar? <?php if ($schrikkeljaar == true){echo 'ja';}else{echo'nee';} ?></p>
   
   <h1>deel 2:</h1>
   <li>seconden: <?php echo $seconden ?></li>
   <li>minuten: <?php echo $minuten ?></li>
   <li>uren: <?php echo $uren ?></li>
   <li>dagen: <?php echo $dagen ?></li>
   <li>weken: <?php echo $weken ?></li>
   <li>maanden: <?php echo $maanden ?></li>
   <li>jaren: <?php echo $jaren ?></li>
    
</body>
</html>