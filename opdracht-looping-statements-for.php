<?php



?>

<!DOCTYPE html>
<html lang="en">
<style>
    .oneven{
        background-color: green;
    }
</style>
<head>
    <meta charset="UTF-8">
    <title>looping statements for</title>
</head>
<body>
   
   <h1>deel 1:</h1>
   <table>
       <?php for ( $rij = 0; $rij < 11; ++$rij): ?>
				<tr>
					<?php for ( $kolom = 0; $kolom < 11; ++$kolom): ?>
						<td class="<?= ( ( $rij * $kolom ) % 2 > 0 ) ? 'oneven' : '' ?>"><?php echo $rij * $kolom ?></td>
					<?php endfor ?>
				</tr>
        <?php endfor ?>
   </table>
    
</body>
</html>