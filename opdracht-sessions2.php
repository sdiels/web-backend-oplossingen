<?php


	session_start();

	if ( isset( $_GET['session'] ) )
    {
        if ( $_GET['session']  == 'destroy' )
        {
            session_destroy( );
            header( 'location: opdracht-sessions.php' );
        }
    }

	if (isset($_POST["submit"])){
        $_SESSION['email'] = $_POST[ 'email' ];
        $_SESSION['nickname'] = $_POST[ 'nickname' ];
    }
        $email = ( isset( $_SESSION[ 'email'] ) ) ? $_SESSION[ 'email'] : '';
        $nickname = ( isset( $_SESSION[ 'nickname'] ) ) ? $_SESSION[ 'nickname'] : '';
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

        <h1>Registratiegegevens</h1>

        <ul>
            <li>e-mail:
                <?php echo $email ?>
            </li>
            <li>nickname:
                <?php echo $nickname ?>
            </li>
        </ul>

        <h1>Deel 2: adres</h1>
        <form action="opdracht-sessions3.php" method="POST">
            <ul>
                <li>
                    <label for="email">email</label>
                    <input type="text" id="email" name="email" value="<?= $email ?>" placeholder="vul email in" <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "email" ) ? 'autofocus' : '' ?>>
                </li>
                <li>
                    <label for="nickname">nickname</label>
                    <input type="text" id="nickname" name="nickname" value="<?= $nickname ?>" placeholder="vul nickname in" <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "nickname" ) ? 'autofocus' : '' ?>>
                </li>
                <li>
                    <label for="straat">straat</label>
                    <input type="text" id="straat" name="straat" value="<?= $straat ?>" placeholder="vul straat in" <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "straat" ) ? 'autofocus' : '' ?>>
                </li>
                <li>
                    <label for="nummer">nummer</label>
                    <input type="number" id="nummer" name="nummer" value="<?= $nummer ?>" placeholder="vul huisnummer in" <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "nummer" ) ? 'autofocus' : '' ?>>
                </li>
                <li>
                    <label for="gemeente">gemeente</label>
                    <input type="text" id="gemeente" name="gemeente" value="<?= $gemeente ?>" placeholder="vul gemeente in" <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "gemeente" ) ? 'autofocus' : '' ?>>
                </li>
                <li>
                    <label for="postcode">postcode</label>
                    <input type="text" id="postcode" name="postcode" value="<?= $postcode ?>" placeholder="vul postcode in" <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "postcode" ) ? 'autofocus' : '' ?>>
                </li>
            </ul>
            <input type="submit" value="Volgende">
        </form>

    </body>

    </html>
