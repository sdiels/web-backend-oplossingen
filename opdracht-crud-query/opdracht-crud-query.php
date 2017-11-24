<?php

    $message	=	false;

	try
	{
		$db = new PDO('mysql:host=127.0.0.1;dbname=bieren', 'root', '' ); // Connectie maken
        
        $queryString	=	'SELECT *
								FROM bieren 
								INNER JOIN brouwers
								ON bieren.brouwernr = brouwers.brouwernr
								WHERE bieren.naam LIKE "Du%"
								AND brouwers.brnaam LIKE "%a%"';

		$statement = $db->prepare( $queryString );

		$statement->execute( );

	}
	catch ( PDOException $e )
	{
		$message['type']	=	'error';
		$message['text']	=	'De connectie is niet gelukt.';
	}

    $bieren	=	array();

		while ( $row = $statement->fetch( PDO::FETCH_ASSOC ) )
		{
			$bieren[] 	=	$row;
		}

		$columnNames	=	array();
		$columnNames[]	=	'Biernummer';

		foreach( $bieren[0] as $key => $bier )
		{
			$columnNames[  ]	=	$key;
		}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>crud query</title>
</head>
<body>
  
  <h1>deel 1</h1>
   
   <?php
    if($message) {
        echo '<h2>' . $message['text'] . '</h2>';
    }
    ?>
    
    <table>
		
		<thead>
			<tr>
				<?php
                    foreach ($columnNames as $columnName) {
                        echo '<th>' . $columnName . '</th>';
                    }
                ?>
			</tr>
		</thead>

		<tbody>
			
			<?php
    
                foreach ($bieren as $key => $bier) {
                    echo '<tr>';
                    echo '<td>' . ($key + 1) . '</td>';
                    
                    foreach($bier as $value) {
                        echo '<td>' . $value . '</td>';
                    }
                    
                    echo '</tr>';
                }
    
            ?>
			
		</tbody>

	</table>
    
</body>
</html>