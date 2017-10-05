<?php

$getal = 1;
$dag = '';

if ($getal == 1) 
{
    $dag = 'maandag';
}
if ($getal == 2) 
{
    $dag = 'dinsdag';
}
if ($getal == 3) 
{
    $dag = 'woensdag';
}
if ($getal == 4) 
{
    $dag = 'donderdag';
}
if ($getal == 5) 
{
    $dag = 'vrijdag';
}
if ($getal == 6) 
{
    $dag = 'zaterdag';
}
if ($getal == 7) 
{
    $dag = 'zondag';
}

$caps = strtoupper($dag);
$kleineA 	=	str_replace( 'A', 'a' , $caps );
$posLaatsteA    =   strrpos( $caps, 'A' );
$kleineLaatsteA 	        =	substr_replace( $caps, 'a', $posLaatsteA, 1 );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>if</title>
</head>
<body>
    
    <h1>deel 1:</h1>
    <p>dag: <?php echo $dag ?></p>
    
    <h1>deel 2:</h1>
    <p><?php echo $caps ?></p>
    <p><?php echo $kleineA ?></p>
    <p><?php echo $kleineLaatsteA ?></p>
    
    
</body>
</html>