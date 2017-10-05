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
    
</body>
</html>