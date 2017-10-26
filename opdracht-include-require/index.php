<?php

$artikels = array(
                  array (       'title' => 'Asteroïde zal donderdag rakelings langs ons passeren',
								'text' => 'Het gaat om planetoïde 2012 TC4 die in 2012 door een observatorium op Hawaï is ontdekt. De dichtste passage is om 07.41 uur. Volgens het Europese Ruimtevaartbureau ESA biedt de scheervlucht een ‘excellente mogelijkheid om de internationale capaciteiten voor het herkennen en het volgen van objecten in de buurt van de Aarde te testen. Zo kunnen we onze capaciteiten onderzoeken over hoe wij samen op een reële bedreiging kunnen reageren’.',
                                'tags' => array("tag 1 van artikel 1")),
    
                  array (       'title' => 'Sporen van glyfosaat gevonden in Ben & Jerry’s-ijs',
								'text' => 'Professor Gilles-Eric Seralini van de universiteit van Caen, auteur van verschillende wetenschappelijke studies over de gevaren van glyfosaat deelt de bezorgdheid. Volgens hem zijn de toegelaten hoeveelheden door de Amerikaanse en Europese autoriteiten op achterhaalde toxicologische modellen gebaseerd. ‘Ze houden geen rekening met de hormoonverstorende eigenschappen van onkruidverdelgers op basis van glyfosaat, waarvan zelfs kleine dosissen gezondheidsproblemen kunnen veroorzaken’, verklaarde hij.',
                                'tags' => array("tag 1 van artikel 2", "tag 2 van artikel 2")),
    
                  array (       'title' => 'VS willen terug naar de maan',
								'text' => 'Begin juli blies de Amerikaanse president Donald Trump na 25 jaar de National Space Council nieuw leven in. De groep verzorgt een brugfunctie tussen het Witte Huis en de Amerikaanse ruimtevaartorganisatie NASA. Deze week kwam de groep voor het eerst weer samen. Tijdens zijn openingstoespraak liet vice-president Mike Pence verstaan hoe het Amerikaanse ruimtevaartbeleid moet evolueren. De National Space Council moet er voor zorgen dat de Amerikanen op korte termijn constant in een lange baan rond om de aarde aanwezig zijn.',
                                'tags' => array("tag 1 van artikel 3", "tag 1 van artikel 3", "tag 3 van artikel 3"))
                 )

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>include / require</title>

        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <?php
    
    include 'header-partial.html';
    include 'body-partial.html';

    foreach ($artikels as $artikel){
        echo '<h3>' . $artikel['title'] . '</h3>';
        echo '<p>' . $artikel['text'] . '</p>';
    }

    include 'footer-partial.html';
    
    ?>

    </body>

    </html>
