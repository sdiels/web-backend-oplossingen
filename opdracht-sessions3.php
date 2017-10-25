<?php


	session_start();

    $email = $_SESSION[ 'email'];
    $nickname = $_SESSION[ 'nickname'];

	if ( isset( $_GET['session'] ) )
    {
        if ( $_GET['session']  == 'destroy' )
        {
            session_destroy( );
            header( 'location: opdracht-sessions.php' );
        }
    }
    
        $_SESSION['straat'] = $_POST[ 'straat' ];
        $_SESSION['nummer'] = $_POST[ 'nummer' ];
        $_SESSION['gemeente'] = $_POST[ 'gemeente' ];
        $_SESSION['postcode'] = $_POST[ 'postcode' ];
        $straat = ( isset( $_SESSION[ 'straat'] ) ) ? $_SESSION[ 'straat'] : '';
	    $nummer = ( isset( $_SESSION[ 'nummer'] ) ) ? $_SESSION[ 'nummer'] : '';
        $gemeente = ( isset( $_SESSION[ 'gemeente'] ) ) ? $_SESSION[ 'gemeente'] : '';
	    $postcode = ( isset( $_SESSION[ 'postcode'] ) ) ? $_SESSION[ 'postcode'] : '';
    
?>

    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Php oefening 021 - deel1</title>

    </head>

    <body>

        <h1>Overzichtspagina</h1>

        <ul>
            <li>e-mail: <?php echo $email ?> | <a href="opdracht-sessions2.php?focus=email">wijzig</a></li>
            <li>nickname: <?php echo $nickname ?> | <a href="opdracht-sessions2.php?focus=nickname">wijzig</a></li>
            <li>straat: <?php echo $straat ?> | <a href="opdracht-sessions2.php?focus=straat">wijzig</a></li>
            <li>nummer: <?php echo $nummer ?> | <a href="opdracht-sessions2.php?focus=nummer">wijzig</a></li>
            <li>gemeente: <?php echo $gemeente ?> | <a href="opdracht-sessions2.php?focus=gemeente">wijzig</a></li>
            <li>postcode: <?php echo $postcode ?> | <a href="opdracht-sessions2.php?focus=postcode">wijzig</a></li>
        </ul>

    </body>

    </html>
