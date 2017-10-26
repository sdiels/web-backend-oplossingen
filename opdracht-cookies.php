<?php

$string = file_get_contents("opdracht-cookies-text.txt");
$data = explode(".", $string);
$inlogGegevens = array();
foreach ($data as $gegevens){
    $array = explode(",", $gegevens);
    array_push($inlogGegevens, $array);
}

$loggedIn = false;
$message = "";

if (isset($_COOKIE["loggedIn"]) == false){
    if(isset($_POST["submit"])){
        
        foreach ($inlogGegevens as $gegevens) {
            if($_POST["username"] == $gegevens[0] && $_POST["password"] == $gegevens[1]){
                if (isset($_POST["rememberMe"])) {
                    setcookie( 'loggedIn', $_POST["username"], time() + 60*60*24*30);
                    $message = "Hallo " . $gegevens[0] . ", fijn dat je er bent!";
                }else {
                    setcookie( 'loggedIn', $_POST["username"], time() + 360);
                    $message = "Hallo " . $gegevens[0] . ", fijn dat je er bent!";
                }
                $loggedIn = true;
                
                break;
            }else {
                $login = false;
                $message = "De username en/of password is/zijn fout";
        }
        }
        
    
}
}else {
    if($_COOKIE["loggedIn"] != ""){
        $loggedIn = true;
    }
}

if ( isset( $_GET[ 'logout' ] ) )
	{
		setcookie( 'loggedIn', "", time() - 1000 );
		header('location: opdracht-cookies.php');
	}

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>cookies</title>
    </head>

    <body>

        <h1>Deel 1:</h1>
        <p>
            <?php echo $message ?>
        </p>

        <?php
    
    if($loggedIn == false) {
        echo '<form action="opdracht-cookies.php" method="post">
        <ul>
            <li>
                <label for="gebruikersnaam">gebruikersnaam</label>
                <input type="text" id="gebruikersnaam" name="username">
            </li>
            <li>
                <label for="paswoord">paswoord</label>
                <input type="text" id="paswoord" name="password">
            </li>
            <li>
				<label for="rememberMe">Remember me: </label>
				<input type="checkbox" name="rememberMe" id="rememberMe">
            </li>
        </ul>
        <input type="submit" name="submit">
    </form>';
    }else {
        echo '<a href="opdracht-cookies.php?logout=true">Uitloggen</a>';
    }
    
    ?>



    </body>

    </html>
