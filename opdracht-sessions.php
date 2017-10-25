<?php


	session_start();

    $email = "";
    $nickname = "";

	if ( isset( $_GET['session'] ) )
    {
        if ( $_GET['session']  == 'destroy' )
        {
            session_destroy( );
            header( 'location: opdracht-sessions.php' );
        }
    }

    $email = ( isset( $_SESSION[ 'email'] ) ) ? $_SESSION[ 'email'] : '';
    $nickname = ( isset( $_SESSION[ 'nickname'] ) ) ? $_SESSION[ 'nickname'] : '';
    
?>

    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Php oefening 021 - deel1</title>

    </head>

    <body>



        <h2>Deel1: registratiegegevens</h2>

        <form action="opdracht-sessions2.php" method="POST">

            <ul>
                <li>
                    <label for="email">email</label>
                    <input type="text" id="email" name="email" value="<?= $email ?>" placeholder="vul email in">
                </li>
                <li>
                    <label for="nickname">nickname</label>
                    <input type="text" id="nickname" name="nickname" value="<?= $nickname ?>" placeholder="vul nickname in">
                </li>
            </ul>

            <input type="submit" name="submit">

        </form>

        <a href="opdracht-sessions.php?session=destroy">reset</a>

    </body>

    </html>
