<?php

	try
	{

            $db = new PDO('mysql:host=localhost;dbname=bieren','root',''); // Connectie maken
            $messageContainer	=	'Connectie dmv PDO geslaagd.';

                    $fetchRow = array();
            $queryString = 'SELECT *
				FROM bieren 
				JOIN brouwers
				ON (bieren.brouwernr=brouwers.brouwernr)
				WHERE bieren.naam LIKE "Du%"
				AND brouwers.brnaam LIKE "%a%"';

            $statement = $db->prepare($queryString);
          $statement->execute();
            while ( $row = $statement->fetch( PDO::FETCH_ASSOC) )
            {
                $fetchRow[]	=	$row;
             
            }
		$columnNames	=	array();
		$columnNames[0]	=	'#';
        $columnNames[1]	=	'Biernr';
        $columnNames[2]	=	'naam';
        $columnNames[3]	=	'brouwernr';
        $columnNames[4]	=	'soortnr';
        $columnNames[5]	=	'alcohol';
        $columnNames[6]	=	'brnaam';
        $columnNames[7]	=	'adres';
        $columnNames[8]	=	'postcode';
        $columnNames[9]	=	'gemeente';
        $columnNames[10]	='omzet';
		foreach( $bieren[0] as $key => $bier )
		{
			$columnNames[0]	=	$key;
		}
        
            echo var_dump($fetchRow);

     
    }
            
            catch ( PDOException $e )
            {
                $messageContainer	=	'Er ging iets mis: ' . $e->getMessage();
            }





?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Opdracht-concat</title>
<style>
    .odd{ background-color: grey;}
    
    
    
    
</style>
</head>

<body>
	<table>
		
		<thead>
			<tr>
				<?php foreach ($columnNames as $columnName): ?>
					<th><?= $columnName ?></th>
				<?php endforeach ?>
			</tr>
		</thead>

		<tbody>
		
			<?php foreach ($fetchRow as $key => $bier): ?>
				<tr class="<?php echo (($key+1) %2 ==0)?"odd": "" ?>  ">
					<td><?php echo $key +1 ?></td>
					<?php foreach ($bier as $value): ?>
						<td><?php echo $value ?></td>
					<?php endforeach ?>
				</tr>
			<?php endforeach ?>
			
		</tbody>

	</table>

</body>
</html>
