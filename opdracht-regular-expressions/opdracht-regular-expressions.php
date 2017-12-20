<?php

	$regex = '';
	$string =	'';

	$result	= false;

	if ( isset( $_POST[ 'submit' ] ) )
	{
		$regex = $_POST[ 'regex' ];
		$string = $_POST[ 'string' ];

		$replace = '#';

		$result = preg_replace( '/' . $regex . '/', $replace, $string );
	}

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>regular expressions</title>
    </head>

    <body>

        <form action="opdracht-regular-expressions.php" method="post">

            <ul>
                <li>
                    <label for="regex">Regular Expression</label>
                    <input type="text" name="regex" id="regex">
                </li>
                <li>
                    <label for="string">String</label>
                    <textarea name="string" id="string" cols="30" rows="10"></textarea>
                </li>
            </ul>
            <input type="submit" name="submit">
        </form>
        
        <?php
        if($result) {
            echo 'Resultaat: ' . $result;
        }
        
        ?>

    </body>

    </html>
