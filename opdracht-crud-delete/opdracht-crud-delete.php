<?php

	$message = false;

	try
	{
		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '' ); // Connectie maken

		if ( isset( $_POST['delete'] ) )
		{
			$deleteQuery = 'DELETE FROM brouwers WHERE brouwernr = :brouwernr';
			$deleteStatement = $db->prepare( $deleteQuery );
			$deleteStatement->bindValue( ':brouwernr', $_POST['delete'] );
			$isDeleted 	=	$deleteStatement->execute();

			if ( $isDeleted )
			{
				$message['text']	=	'Deze record is succesvol verwijderd.';
			}
			else
			{
				$message['text']	=	'Deze record kon niet verwijderd worden. Reden: ' . $deleteStatement->errorInfo()[2];
			}
		}

		$brouwersQuery	=	'SELECT * FROM brouwers';
		$brouwersStatement = $db->prepare( $brouwersQuery );
		$brouwersStatement->execute();

		$brouwersFieldnames	=	array();
		for ( $fieldNumber = 0; $fieldNumber < $brouwersStatement->columnCount(); ++$fieldNumber )
		{
			$brouwersFieldnames[]	=	$brouwersStatement->getColumnMeta( $fieldNumber )['name'];
		}

		$brouwers	=	array();
		while( $row = $brouwersStatement->fetch( PDO::FETCH_ASSOC ) )
		{
			$brouwers[]	=	$row;
		}

	}
	catch ( PDOException $e )
	{
		$message['type']	=	'error';
		$message['text']	=	'De connectie is niet gelukt.';
	}
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>crud delete</title>
    </head>

    <body>
        <h1>deel 1</h1>

        <?php
        
        if ($message) {
            echo $message['text'];
        }
        ?>

            <form action="<?php echo 'opdracht-crud-delete.php' ?>" method="POST">
                <table>

                    <thead>
                        <tr>
                            <th>#</th>
                            <?php foreach ($brouwersFieldnames as $fieldname){
                                    echo "<th>" . $fieldname . "</th>";
                                } 
                    
                            ?>
                                <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($brouwers as $key => $brouwer){
                            echo '<tr>';
                            echo '<td>' . ++$key . '</td>';
                            foreach ($brouwer as $value) {
                                echo '<td>' . $value . '</td>';
                            }
                            echo '<td> <button type="submit" name="delete" value="' . $brouwer['brouwernr'] . '" class="delete-button"> <img src="icon-delete.png" alt="Delete button"></button></td>';
                            echo '</tr>';
                        } ?>
                    </tbody>
                </table>
            </form>
    </body>

    </html>
