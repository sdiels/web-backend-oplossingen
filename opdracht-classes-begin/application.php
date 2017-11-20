<?php

include 'classes/Percent.php';
$new = 150;
$unit = 100;
$percent = new Percent($new, $unit);

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>classes begin</title>
    </head>

    <body>

        <table>
            <caption>Hoe staat <?php echo $new?> in verhouding tot <?php echo $unit ?>?</caption>
            <tbody>
                <tr>
                    <td>Relatief</td>
                    <td><?php echo $percent->relative ?></td>
                </tr>
                <tr>
                    <td>Procentueel</td>
                    <td><?php echo $percent->hundred ?></td>
                </tr>
                <tr>
                    <td>Nominaal</td>
                    <td><?php echo $percent->nominal ?></td>
                </tr>
            </tbody>
        </table>

    </body>

    </html>
