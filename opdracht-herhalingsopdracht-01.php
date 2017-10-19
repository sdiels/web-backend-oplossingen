<?php

$voorbeeldenArray = scandir ('../web-backend/public/cursus/voorbeelden/');
array_shift( $voorbeeldenArray );
array_shift( $voorbeeldenArray );

$opdrachtenArray = scandir ('../web-backend/public/cursus/opdrachten/');
array_shift( $opdrachtenArray );
array_shift( $opdrachtenArray );

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>herhalingsopdracht 01</title>
    </head>

    <style>
        iframe {
            display: block;
            height: 750px;
            width: 1000px;
        }

    </style>

    <body>

        <ul>
            <li><a href="opdracht-herhalingsopdracht-01.php?link=cursus">Cursus</a></li>
            <li><a href="opdracht-herhalingsopdracht-01.php?link=voorbeelden">Voorbeelden</a></li>
            <li><a href="opdracht-herhalingsopdracht-01.php?link=opdrachten">Opdrachten</a></li>
        </ul>

        <form action="opdracht-herhalingsopdracht-01.php" method="GET">
            <input type="text" name="search" id="search" placeholder="Geef een zoekterm in">

            <input type="submit">
        </form>

        <?php   if(isset($_GET['search'])) {
                    $resultCount = 0;
                    foreach ($voorbeeldenArray as $bestand) {
                        if(strpos( $bestand, $_GET["search"])) {
                            $resultCount++;
                            $bestandsNaam = $bestand . ".php";
                            echo "<li>";
                            echo '<a href="../web-backend/public/cursus/voorbeelden/' . $bestand . "/" . $bestandsNaam . '">';
                            echo $bestandsNaam;
                            echo '</a>';
                            echo "</li>";
                        }
                        
                    }
                    foreach ($opdrachtenArray as $bestand) {
                        if(strpos( $bestand, $_GET["search"])) {
                            $resultCount++;
                            $bestandsNaam = $bestand . ".html";
                            echo "<li>";
                            echo '<a href="../web-backend/public/cursus/opdrachten/' . $bestand . "/" . $bestandsNaam . '">';
                            echo $bestandsNaam;
                            echo '</a>';
                            echo "</li>";
                        }
                        
                    }
                    if ($resultCount == 0) {
                        echo 'Sorry, er zijn geen zoekresultaten gevonden voor "' . $_GET["search"] . '"';
                    }
                }elseif(isset($_GET['link'])) {
                    switch($_GET['link']){
                        case "cursus":
                            echo '<iframe src="../web-backend/public/cursus/web-backend-cursus.pdf" frameborder="0"></iframe>';
                            break;
                        case "voorbeelden":
                            foreach ($voorbeeldenArray as $bestand) {
                                $bestandsNaam = $bestand . ".php";
                                echo "<li>";
                                echo '<a href="../web-backend/public/cursus/voorbeelden/' . $bestand . "/" . $bestandsNaam . '">';
                                echo $bestandsNaam;
                                echo '</a>';
                                echo "</li>";
                            }
                            break;
                        case "opdrachten":

                            foreach ($opdrachtenArray as $bestand) {
                                $bestandsNaam = $bestand . ".html";
                                echo "<li>";
                                echo '<a href="../web-backend/public/cursus/opdrachten/' . $bestand . "/" . $bestandsNaam . '">';
                                echo $bestandsNaam;
                                echo '</a>';
                                echo "</li>";
                            }
                            break;
                    }
                }
        ?>
    </body>

    </html>
