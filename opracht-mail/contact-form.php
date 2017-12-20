<?php
session_start();

$email = '';
$mail = '';
$copy = '';

$message = '';

if(isset($_SESSION['field'])) {
    $email = $_SESSION['field']['email'];
    $mail = $_SESSION['field']['message'];
    if(isset($_SESSION['field']['copy'])){
        $copy = $_SESSION['field']['copy'];
    }
}

if(isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
}

var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>contact form</title>
</head>

<body>
   
   <p><?php echo $message?></p>
   
    <form action="contact.php" method="post">
        <ul>
            <li>
                <label for="email">E-mailadres</label>
                <input type="text" id="email" name="email" value="<?php echo $email?>">
            </li>
            <li>
                <label for="message">Boodschap</label>
                <textarea name="message" id="message" cols="30" rows="10" value="<?php echo $mail?>"></textarea>
            </li>
            <li>
                <input type="checkbox" name="copy" id="copy" value="<?php echo $copy?>">
                <label for="copy">Stuur een kopie naar mezelf</label>
            </li>
        </ul>
        <input type="submit" name="submit">
    </form>
</body>

</html>
