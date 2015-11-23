<?php
	try
	{

            $db = new PDO('mysql:host=localhost;dbname=bieren','root',''); // Connectie maken
            $messageContainer	=	'Connectie dmv PDO geslaagd.';

                    $fetchRow = array();
           if(isset($_GET["brouwerij"])){
              
               $brouwerij = $_GET["brouwerij"];
        $queryString = 'SELECT bieren.naam
				FROM bieren 
				JOIN brouwers
				ON (bieren.brouwernr=brouwers.brouwernr)
				WHERE brouwers.brnaam LIKE"'. $brouwerij . '"';

            $statement = $db->prepare($queryString);
          $statement->execute();
            while ( $row = $statement->fetch( PDO::FETCH_ASSOC) )
            {
                $fetchRow[]	=	$row;
             
            }
		$columnNames	=	array();
		$columnNames[0]	=	'#';
        $columnNames[1]	=	'naam';
    

		foreach( $fetchRow[0] as $key => $bier )
		{
			$columnNames[0]	=	$key;
		}
        
         
           }
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
		<form method="get">
           <select name="brouwerij">
  <option value="achouffe">Achouffe</option>
  <option value="alken">Alken</option>
  <option value="ambly">Ambly</option>
               <input type="submit" name="submit" value="zoek op bieren van brouwerij"></input>

</select>
		</form>
   
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
    <p> <?php      ?> </p>

		
    </body>
</html>