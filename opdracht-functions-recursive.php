<?php

function berekening( $bedrag, $rente, $looptijd )
	{
		$counter = 1;
		$historiek = array();

		if ( $counter <= $looptijd )
		{
			$renteBedrag = floor( $bedrag * ( $rente / 100 ) );
			$nieuwBedrag = $bedrag + $renteBedrag;
			$historiek[ $counter ] = $nieuwBedrag;

			$counter++;

			return berekening( $nieuwBedrag, $rente, $looptijd );
		}
		else
		{
			return $historiek;
		}
	}

$winst = berekening(100000, 8, 10);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>functions recursive</title>
</head>
<body>
   
   <h1>deel 1:</h1>
   <?php foreach($winst as $value): ?>
				<p><?php echo $value ?></p>
			<?php endforeach ?>
    
</body>
</html>