<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>registratie form</title>
</head>

<body>

    <h1>Registreren</h1>
    <form method="post" action="registratie-process.php">
        <ul>
            <li>
                <label for="email">e-mail</label>
                <input type="text" id="email">
            </li>
            <li>
                <label for="password">paswoord</label>
                <input type="password" id="password">
                <input type="submit" name="generatePassword" value="Genereer een paswoord">
            </li>
        </ul>
        <input type="submit" value="Registreer">
    </form>

</body>

</html>
