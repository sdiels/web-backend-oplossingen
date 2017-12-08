<?php

    function __autoload($classname) {
        require_once('Classes/' . $classname . '.php');
    }

	$Kermit	= new Animal('Kermit', 'male', 100);
	$Dikkie	= new Animal('Dikkie', 'male', 100);
	$Flipper = new Animal('Flipper', 'female', 100);

    $Dikkie->changeHealth(-10);
    $Flipper->changeHealth(-20);

    $Simba = new Lion('Simba', 'male', 100, 'Congo lion');
    $Scar = new Lion('Scar', 'male', 100, 'Kenia lion');

    $Zeke = new Zebra('Zeke', 'male', 100, 'Quagga');
    $Zana = new Zebra('Zana', 'female', 100, 'Selous');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>classes extends</title>
</head>
<body>
    
    <h1>deel 1</h1>
    
    <p><?php echo $Kermit->getName(); ?> is van het geslacht <?php echo $Kermit->getGender(); ?> en heeft momenteel <?php echo $Kermit->getHealth(); ?> levenspunten (special move: <?php echo $Kermit->doSpecialMove(); ?>)</p>
    <p><?php echo $Dikkie->getName(); ?> is van het geslacht <?php echo $Dikkie->getGender(); ?> en heeft momenteel <?php echo $Dikkie->getHealth(); ?> levenspunten (special move: <?php echo $Dikkie->doSpecialMove(); ?>)</p>
    <p><?php echo $Flipper->getName(); ?> is van het geslacht <?php echo $Flipper->getGender(); ?> en heeft momenteel <?php echo $Flipper->getHealth(); ?> levenspunten (special move: <?php echo $Flipper->doSpecialMove(); ?>)</p>
    
    <h1>deel 2</h1>
    
    <p>De speciale move van <?php echo $Simba->getName(); ?> (soort: <?php echo $Simba->getSpecies(); ?>): <?php echo $Simba->doSpecialMove(); ?></p>
    <p>De speciale move van <?php echo $Scar->getName(); ?> (soort: <?php echo $Scar->getSpecies(); ?>): <?php echo $Scar->doSpecialMove(); ?></p>
    
    <p>De speciale move van <?php echo $Zeke->getName(); ?> (soort: <?php echo $Zeke->getSpecies(); ?>): <?php echo $Zeke->doSpecialMove(); ?></p>
    <p>De speciale move van <?php echo $Zana->getName(); ?> (soort: <?php echo $Zana->getSpecies(); ?>): <?php echo $Zana->doSpecialMove(); ?></p>
    
</body>
</html>