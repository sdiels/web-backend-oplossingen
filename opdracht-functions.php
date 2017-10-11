<?php

function berekenSom($getal1, $getal2){
    $som = $getal1 + $getal2;
    return $som;
}

function vermenigvuldig($getal1, $getal2){
    $product = $getal1 + $getal2;
    return $product;
}

function isEven($getal){
    if($getal%2 ==0){
        $isEven = true;
    }else{
        $isEven = false;
    }
    return $isEven;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>functions</title>
</head>
<body>
   
   <h1>deel 1:</h1>
    <p><?php echo berekenSom(1, 5) ?></p>
    <p><?php echo vermenigvuldig(3, 5) ?></p>
    <p><?php if(isEven(5)){echo "true";}else{echo "false";} ?></p>
    
</body>
</html>