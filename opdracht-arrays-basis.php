<?php

$dieren = array("aap", "leeuw", "hond", "zeehond", "kat", "inktvis", "tijger", "hamster", "cavia", "papegaai");

$dieren2[] = "aap";
$dieren2[] = "leeuw";
$dieren2[] = "hond";
$dieren2[] = "zeehond";
$dieren2[] = "kat";
$dieren2[] = "inktvis";
$dieren2[] = "tijger";
$dieren2[] = "hamster";
$dieren2[] = "cavia";
$dieren2[] = "papegaai";

$voertuigen = array("land" => array("auto", "vrachtwagen"), "lucht" => array("helikopter", "vliegtuig"), "zee" => array("boot"));

$getallen = array(1, 2, 3, 4, 5);
$vermenigvuldiging = $getallen[0];
$oneven = array();
$getallenReverse = array_reverse( $getallen );
$som = array();
for ($x = 1; $x < 5; $x++) {
    $vermenigvuldiging = $vermenigvuldiging * $getallen[$x];
}
foreach( $getallen as $value )
   {
      if ( $value % 2 == 0 )
      {
         $oneven[]   =   $value;
      }
   }

for ($x = 0; $x < 5; $x++) {
    $getal1 = $getallen[$x];
    $getal2 = $getallenReverse[$x];
    $som[] = $getal1 + $getal2;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>arrays basis</title>
    
    <h1>deel 1:</h1>
    <p><?php echo var_dump($voertuigen) ?></p>
    
    <h1>deel 2:</h1>
    <p><?php foreach($oneven as $value) {echo $value;} ?></p>
    
</head>
<body>
    
</body>
</html>