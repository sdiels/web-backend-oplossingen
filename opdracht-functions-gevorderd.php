<?php

$md5HashKey = d1fa402db91a7a93c4f414b8278ce073;
$argument1 = "2";
$argument2 = "8";
$argument3 = "a";
function function1( $string, $argument )
	{
		$stringLengte =  strlen( $string );
		$aantal = substr_count ( $string, $argument );

		$procent = ( $aantal / $stringLengte ) * 100;

		return $procent;
	}
function function2($argument)
	{
        $string = $GLOBALS['md5HashKey'];
    
		$stringLengte =  strlen( $string );
		$aantal = substr_count ( $string, $argument );

		$procent = ( $aantal / $stringLengte ) * 100;

		return $procent;
	}
function function3($argument)
	{
        global $md5HashKey;
		$string = $md5HashKey;
    
		$stringLengte =  strlen( $string );
		$aantal = substr_count ( $string, $argument );

		$procent = ( $aantal / $stringLengte ) * 100;

		return $procent;
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>functions gevorderd</title>
</head>
<body>
   
   <h1>deel 1:</h1>
   <p>Functie 1: De needle '<?php echo $argument1 ?>' komt <?php echo function1($md5HashKey, $argument1) ?>% voor in de hash key '<?php echo $md5HashKey ?>'</p>
   <p>Functie 2: De needle '<?php echo $argument2 ?>' komt <?php echo function2($argument2) ?>% voor in de hash key '<?php echo $md5HashKey ?>'</p>
   <p>Functie 3: De needle '<?php echo $argument3 ?>' komt <?php echo function3($argument3) ?>% voor in de hash key '<?php echo $md5HashKey ?>'</p>
    
</body>
</html>