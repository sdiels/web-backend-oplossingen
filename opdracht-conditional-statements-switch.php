<?php

$getal = 3;
$dag = "";

switch($getal) {
    case 1:
        $dag = "maandag";
        break;
    case 2:
        $dag = "dinsdag";
        break;
    case 3:
        $dag = "woensdag";
        break;
    case 4:
        $dag = "donderdag";
        break;
    case 5:
        $dag = "vrijdag";
        break;
    case 6:
        $dag = "zaterdag";
        break;
    case 7:
        $dag = "zondag";
        break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>switch</title>
</head>
<body>
    
    <h1>deel 1:</h1>
    <p><?php echo $dag ?></p>
    
</body>
</html>