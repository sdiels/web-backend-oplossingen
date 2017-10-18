<?php

$username = "stefan";
$password = "azerty";
$melding = "";

if ( isset( $_POST ['submit'] ) )
	{
		if ( $_POST['username'] == $username && $_POST['password'] == $password )
		{
			$melding = "Inloggen succesvol";
		}
		else
		{
			$melding = "Inloggen mislukt";
		}
	}

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>post</title>
    </head>

    <body>

        <h1>Deel 1:</h1>

        <form action="opdracht-post.php" method="post">

            <ul>
                <li>
                    <label for="username">gebruikersnaam</label>
                    <input type="text" id="username" name="username">
                </li>
                <li>
                    <label for="password">paswoord</label>
                    <input type="text" id="password" name="password">
                </li>
            </ul>
            <input type="submit" name="submit">
            <p><?php echo $melding ?></p>

        </form>

    </body>

    </html>
