<?php
    
    $timestamp = mktime(22, 35, 25, 01, 21, 1904);
	$date = date('d F Y, g:i:s A', $timestamp);

    setlocale( LC_ALL, 'nld_nld' );
    $datum = strftime("%d %B %Y, %H:%M:%S %p", $timestamp);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>date</title>
</head>
<body>
   <h1>deel 1:</h1>
   
   <p><?php echo $date ?></p>
   
   <h1>deel 2:</h1>
   
   <p><?php echo $datum ?></p>
    
</body>
</html>