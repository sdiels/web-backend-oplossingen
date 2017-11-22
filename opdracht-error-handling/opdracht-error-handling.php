<?php
    session_start();
	$currentPage = basename( $_SERVER[ 'PHP_SELF' ] );
	$isValid = false;

	try 
	{
		if ( isset( $_POST[ 'submit' ] ) )
		{			
			if ( isset( $_POST[ 'code' ] ) )
			{
				if ( strlen( $_POST[ 'code' ] ) !== 8 )
				{
					throw new Exception ( 'VALIDATION-CODE-LENGTH' );
				}
				else
				{
					$isValid = true;
				}
			}
			else
			{
				throw new Exception( 'SUBMIT-ERROR' );
			}
		}
		
	} 
	catch (Exception $e) 
	{
		$messageCode = $e->getMessage();
		$message = array();
		$createMessage = FALSE;

		switch( $messageCode )
		{
			case 'SUBMIT-ERROR':
				$message[ 'type' ] = 'error';
				$message[ 'text' ] = 'Er werd met het formulier geknoeid';
				break;

			case 'VALIDATION-CODE-LENGTH':
				$message[ 'type' ] = 'error';
				$message[ 'text' ] = 'De kortingscode heeft niet de juiste lengte';

				$createMessage = TRUE;
				break;
		}

		if ( $createMessage )
		{
			createMessage( $message );
		}

		logToFile( $message );
	}

	$message = showMessage();

    function logToFile( $message )
	{
		$date =	date( 'H:i:s', time() );
		$ip	= $_SERVER['REMOTE_ADDR'];
		$errorString = 'datum: ' . $date . ', ip: ' . $ip . ', type: ' . $message['type'] . ', message:' . $message[ 'text' ] . "\n\r";

		file_put_contents( 'error.log', $errorString, FILE_APPEND );
	}

	function showMessage()
	{
		$message = FALSE;

		if ( isset( $_SESSION[ 'message' ] ) )
		{
			$message = $_SESSION[ 'message' ];
			unset( $_SESSION[ 'message' ] );
		}

		return $message;
	}


	function createMessage( $message )
	{
		$_SESSION['message'] = $message;
	}

	var_dump($_POST);
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>error handling</title>
</head>

<body>

    <h1>Geef uw kortingscode op</h1>
    
    <?php
        if($message) {
            echo '<p>' . $message[ 'text' ] . '</p>';
        }
    ?>

    <form action="opdracht-error-handling.php" method="POST">
        <ul>
            <li>
                <label for="code">Kortingscode</label>
                <input type="text" id="code" name="code">
            </li>
        </ul>
        <?php
        if($isValid == true) {
            echo '<p>Korting toegekend!</p>';
        }
        ?>
        
        <input type="submit" id="submit" name="submit">
    </form>

</body>

</html>
