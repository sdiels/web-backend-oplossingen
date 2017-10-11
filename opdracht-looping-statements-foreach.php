<?php

$text = file_get_contents( 'text-file-foreach.txt' );
$textLength =	strlen( $text );
$textChars = array();
for ($x = 0; $x < $textLength; $x++ )
	{
		$textChars[]	=	substr( $text, $x, 1 );
	}

rsort($textChars);
$textCharsReversed = array_reverse($textChars);

$counter = array();
foreach($textCharsReversed as $value)
	{
		if ( isset ( $counter[ $value ] ) )
		{
			++$counter[ $value ];
		}
		else
		{
			$counter[ $value ] = 1;
		}
		
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>looping statements foreach</title>
</head>
<body>
    
    <h1>deel 1:</h1>
    <p><?php echo var_dump($counter) ?></p>
    
</body>
</html>