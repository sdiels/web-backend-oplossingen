<?php
    $message = false;
	
    try {
        $db = new mysqli('localhost', 'root', '', 'bieren');
        
        if (isset($_GET['order_by'])) {
            $orderSettings = explode("-", $_GET['order_by']);
            $result = $db->query('SELECT * FROM bieren JOIN brouwers ON (bieren.brouwernr = brouwers.brouwernr) JOIN soorten ON (bieren.soortnr = soorten.soortnr) ORDER BY ' . $orderSettings[0] . ' ' . $orderSettings[1]);
        }
        else {
            $orderSettings = array('', 'NoOrder');
            $result = $db->query('SELECT * FROM bieren JOIN brouwers ON (bieren.brouwernr = brouwers.brouwernr) JOIN soorten ON (bieren.soortnr = soorten.soortnr)');
        }
        
		$fetchAssoc = array(); 
		while ($row = $result->fetch_assoc())
		{
			$fetchAssoc[] = $row;
		}
    }

    catch(PDOException $e) {
        $message['text']	=	'De connectie is niet gelukt.';
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Document</title>

    </head>

    <body>

        <table>
            <thead>
                <th>
                    <a href="opdracht-crud-query-order-by.php?order_by=biernr-<?php if(($orderSettings[0] == "biernr" && $orderSettings[1] == "desc") ||$orderSettings[1] == "NoOrder") {echo "asc";} else{echo "desc";} ?>">Biernummer(PK)</a>
                    <?php if($orderSettings[0] == "biernr") {
                        if($orderSettings[1] == "desc"){
                            echo '<img src="icon-desc.png" alt="desc">';
                        }else {
                            echo '<img src="icon-asc.png" alt="asc">';
                        }
                    }
                    ?>
                </th>
                <th><a href="opdracht-crud-query-order-by.php?order_by=naam-<?php if(($orderSettings[0] == "naam" && $orderSettings[1] == "desc") ||$orderSettings[1] == "NoOrder") {echo "asc";} else{echo "desc";} ?>">Bier</a>
                <?php if($orderSettings[0] == "naam") {
                        if($orderSettings[1] == "desc"){
                            echo '<img src="icon-desc.png" alt="desc">';
                        }else {
                            echo '<img src="icon-asc.png" alt="asc">';
                        }
                    }
                    ?>
                </th>
                <th><a href="opdracht-crud-query-order-by.php?order_by=brnaam-<?php if(($orderSettings[0] == "brnaam" && $orderSettings[1] == "desc") ||$orderSettings[1] == "NoOrder") {echo "asc";} else{echo "desc";} ?>">Brouwer</a>
                <?php if($orderSettings[0] == "brnaam") {
                        if($orderSettings[1] == "desc"){
                            echo '<img src="icon-desc.png" alt="desc">';
                        }else {
                            echo '<img src="icon-asc.png" alt="asc">';
                        }
                    }
                    ?>
                </th>
                <th><a href="opdracht-crud-query-order-by.php?order_by=soort-<?php if(($orderSettings[0] == "soort" && $orderSettings[1] == "desc") ||$orderSettings[1] == "NoOrder") {echo "asc";} else{echo "desc";} ?>">Soort</a>
                <?php if($orderSettings[0] == "soort") {
                        if($orderSettings[1] == "desc"){
                            echo '<img src="icon-desc.png" alt="desc">';
                        }else {
                            echo '<img src="icon-asc.png" alt="asc">';
                        }
                    }
                    ?>
                </th>
                <th><a href="opdracht-crud-query-order-by.php?order_by=alcohol-<?php if(($orderSettings[0] == "alcohol" && $orderSettings[1] == "desc") ||$orderSettings[1] == "NoOrder") {echo "asc";} else{echo "desc";} ?>">Alcoholpercentage</a>
                <?php if($orderSettings[0] == "alcohol") {
                        if($orderSettings[1] == "desc"){
                            echo '<img src="icon-desc.png" alt="desc">';
                        }else {
                            echo '<img src="icon-asc.png" alt="asc">';
                        }
                    }
                    ?>
                </th>
            </thead>
            <tbody>
                <?php foreach ($fetchAssoc as $key=>$row) { ?>
                    <tr <?php if ($key%2==0 ) { ?> class = "onevenRijen"
                        <?php } ?>>
                            <td>
                                <?php echo $row['biernr'] ?>
                            </td>
                            <td>
                                <?php echo $row['naam'] ?>
                            </td>
                            <td>
                                <?php echo $row['brnaam'] ?>
                            </td>
                            <td>
                                <?php echo $row['soort'] ?>
                            </td>
                            <td>
                                <?php echo $row['alcohol'] ?>
                            </td>
                    </tr>
                    <?php } ?>
            </tbody>
        </table>

    </body>

    </html>
