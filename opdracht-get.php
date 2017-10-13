<?php

$artikels = array(
                  array (       'titel' => 'Asteroïde zal donderdag rakelings langs ons passeren',
								'inhoud' => 'Het gaat om planetoïde 2012 TC4 die in 2012 door een observatorium op Hawaï is ontdekt. De dichtste passage is om 07.41 uur. Volgens het Europese Ruimtevaartbureau ESA biedt de scheervlucht een ‘excellente mogelijkheid om de internationale capaciteiten voor het herkennen en het volgen van objecten in de buurt van de Aarde te testen. Zo kunnen we onze capaciteiten onderzoeken over hoe wij samen op een reële bedreiging kunnen reageren’.',
								'afbeelding' => '1.jpg',
								'afbeeldingBeschrijving' => 'asteroide'),
    
                  array (       'titel' => 'Sporen van glyfosaat gevonden in Ben & Jerry’s-ijs',
								'inhoud' => 'Professor Gilles-Eric Seralini van de universiteit van Caen, auteur van verschillende wetenschappelijke studies over de gevaren van glyfosaat deelt de bezorgdheid. Volgens hem zijn de toegelaten hoeveelheden door de Amerikaanse en Europese autoriteiten op achterhaalde toxicologische modellen gebaseerd. ‘Ze houden geen rekening met de hormoonverstorende eigenschappen van onkruidverdelgers op basis van glyfosaat, waarvan zelfs kleine dosissen gezondheidsproblemen kunnen veroorzaken’, verklaarde hij.',
								'afbeelding' => '2.jpg',
								'afbeeldingBeschrijving' => "Ben & Jerry's-ijs"),
    
                  array (       'titel' => 'VS willen terug naar de maan',
								'inhoud' => 'Begin juli blies de Amerikaanse president Donald Trump na 25 jaar de National Space Council nieuw leven in. De groep verzorgt een brugfunctie tussen het Witte Huis en de Amerikaanse ruimtevaartorganisatie NASA. Deze week kwam de groep voor het eerst weer samen. Tijdens zijn openingstoespraak liet vice-president Mike Pence verstaan hoe het Amerikaanse ruimtevaartbeleid moet evolueren. De National Space Council moet er voor zorgen dat de Amerikanen op korte termijn constant in een lange baan rond om de aarde aanwezig zijn.',
								'afbeelding' => '3.jpg',
								'afbeeldingBeschrijving' => "Maan met vliegtuig ervoor"),
                 )

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>get</title>
</head>
<style>
    h1 {
        text-align: center;
        font-size: 50px;
    }
    .multiple {
        float: left;
        width: 25%;
        margin: 4%;
    }
    img {
        width: 100%;
    }
</style>
<body>
   
   <h1>De krant van vandaag</h1>

                        <section class="articles">
                            <?php if($_GET['id'] == 0): ?>
                            <?php foreach ($artikels as $key => $artikel): ?>
                            <article class="multiple">
                                <h2><?php echo $artikel["titel"] ?></h2>
                                <p><?php echo substr($artikel["inhoud"], 0, 50) ?>...</p>
                                <div class="img"><img src="images-opdracht-get/<?php echo $artikel["afbeelding"] ?>" alt="<?php echo $artikel["afbeeldingBeschrijving"] ?>"></div>
                                <p class="read-more"><a href="opdracht-get.php?id=<?php echo $key + 1 ?>" method="get">Lees meer</a></p>
                            </article>
                            <?php endforeach ?>
                            <?php elseif($_GET['id'] > 3): ?>
                            <h2>Dit artikel bestaat niet</h2>
                            <?php else: ?>
                            <article class="multiple">
                                <h2><?php echo $artikels[$_GET['id'] - 1]["titel"] ?></h2>
                                <p><?php echo $artikels[$_GET['id'] - 1]["inhoud"] ?>...</p>
                                <div class="img"><img src="images-opdracht-get/<?php echo $artikels[$_GET['id'] - 1]["afbeelding"] ?>" alt="<?php echo $artikels[$_GET['id'] - 1]["afbeeldingBeschrijving"] ?>"></div>
                            </article>
                            <?php endif ?>
                        </section>

    
</body>
</html>