<?php

	$message = false;
    $brouwersEdit =	false;

	try
	{
		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '' );

		if ( isset( $_POST['delete'] ) )
		{
            $deleteFK = 'UPDATE bieren SET brouwernr = null WHERE brouwernr = :brouwernr';
            $deleteFKStatement = $db->prepare( $deleteFK );
            $deleteFKStatement->bindValue( ':brouwernr', $_POST['delete'] );
            $FKisDeleted = $deleteFKStatement->execute();
            
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
        
        if ( isset( $_POST[ 'edit' ] ) )
		{

            $brouwersEdit	=	query( $db, 'SELECT * FROM brouwers WHERE brouwernr = :brouwernr', array( ':brouwernr' => $_POST[ 'edit' ] ) );
            $message['text']	=	'Update op de brouwer ' . $brouwersEdit['data'][0]['brouwernr'];
            
            if ( $_POST['edit'] == 'Wijzigen') {
                
			$updateQuery = 'UPDATE brouwers SET brnaam = :brnaam,
											adres =	:adres,
											postcode = :postcode,
											gemeente = :gemeente,
											omzet =	:omzet
									WHERE brouwernr	= :brouwernr LIMIT 1';
            
            var_dump($_POST);

			$statement = $db->prepare( $updateQuery );
			$statement->bindValue( ":brouwernr",  $_POST[ 'brouwernr' ] );						
			$statement->bindValue( ":brnaam",  $_POST[ 'brnaam' ] );						
			$statement->bindValue( ":adres",  $_POST[ 'adres' ] );						
			$statement->bindValue( ":postcode",  $_POST[ 'postcode' ] );						
			$statement->bindValue( ":gemeente",  $_POST[ 'gemeente' ] );						
			$statement->bindValue( ":omzet",  $_POST[ 'omzet' ] );

			$updateSuccessful = $statement->execute();
                
                if ( $updateSuccessful )
			     {
			     	$message['text']	=	'Update op de brouwer ' . $_POST[ 'brnaam' ] . ' succesvol uitgevoerd.';
                    
			     }
			     else
			     {
			     	$message['text']	=	'Update op de brouwer ' . $_POST[ 'brnaam' ] . ' is mislukt.';
			     }		
                
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

    function query( $db, $query, $tokens = false )
	{
		$statement = $db->prepare( $query );
		
		if ( $tokens )
		{
			foreach ( $tokens as $token => $tokenValue )
			{
				$statement->bindValue( $token, $tokenValue );
			}
		}

		$statement->execute();

		/*  Veldnamen ophalen*/
		$fieldnames	=	array();

		for ( $fieldNumber = 0; $fieldNumber < $statement->columnCount(); ++$fieldNumber )
		{
			$fieldnames[]	=	$statement->getColumnMeta( $fieldNumber )['name'];
		}

		/*De brouwer-data ophalen*/
		$data	=	array();

		while( $row = $statement->fetch( PDO::FETCH_ASSOC ) )
		{
			$data[]	=	$row;
		}

		$returnArray['fieldnames']	=	$fieldnames;
		$returnArray['data']		=	$data;

		return $returnArray;
	}
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>crud update</title>
    </head>

    <body>
        <h1>deel 1</h1>

        <?php
        
        if ($message) {
            echo $message['text'];
        }
        ?>

            <?php if ( $brouwersEdit ){
            
            echo '<form action="opdracht-crud-update.php" method="POST">';
            echo '<ul>';
            foreach($brouwersEdit['data'][0] as $fieldname => $value) {
                if ( $fieldname != "brouwernr" ){
                    echo '<li>';
                    echo '<label for="' . $fieldname . '"><?= $fieldname ?>
                </label>'; echo '
                <input type="text" id="' . $fieldname . '" name="' . $fieldname . '" value="' . $value . '">'; echo '</li>'; } } echo '</ul>'; echo '
                <input type="hidden" value="' . $brouwersEdit['data'][0]['brouwernr'] . '" name="brouwernr">'; echo '
                <input type="submit" name="edit" value="Wijzigen">'; echo '</form>'; }?>

                <form action="<?php echo 'opdracht-crud-update.php' ?>" method="POST">
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
                            echo '<td> <button type="submit" name="edit" value="' . $brouwer['brouwernr'] . '" class="edit-button"> <img src="icon-edit.png" alt="Edit button"></button></td>';
                            echo '</tr>';
                        } ?>
                        </tbody>
                    </table>
                </form>
    </body>

    </html>
