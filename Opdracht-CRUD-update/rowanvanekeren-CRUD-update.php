
<?php
	try
	{
session_start();
            $db = new PDO('mysql:host=localhost;dbname=bieren','root',''); // Connectie maken
            $messageContainer	=	'Connectie dmv PDO geslaagd.';

                    $fetchRow = array();
    if(isset($_GET["deleteid"])){
              $queryStringsec = 'DELETE b FROM brouwers as b WHERE brouwernr=' . "'" . $_GET["deleteid"] . "'";
                 $statement = $db->prepare($queryStringsec);
          $statement->execute();
            
            
        }
         $_SESSION["updateid"] = $_GET["updateid"];
        if(isset($_POST["submit"])){
 $update	=	'UPDATE brouwers SET brnaam = :brnaam,adres = :adres,postcode = :postcode,gemeente = :gemeente,omzet	= :omzet WHERE brouwernr = :updateid';
           $statement = $db->prepare($update);  
			$statement->bindValue( ':brnaam', $_POST[ 'brnaam' ] );
			$statement->bindValue( ':adres', $_POST[ 'adres' ] );
			$statement->bindValue( ':postcode', $_POST[ 'postcode' ] );
			$statement->bindValue( ':gemeente', $_POST[ 'gemeente' ] );
			$statement->bindValue( ':omzet', $_POST[ 'omzet' ] ); 
            $statement->bindValue( ':updateid',  $_SESSION["updateid"] ); 
            $statement->execute();
        }
        
        
        
        $queryString = 'SELECT brnaam, adres, postcode, gemeente,brouwernr FROM brouwers';

            $statement = $db->prepare($queryString);
          $statement->execute();
            while ( $row = $statement->fetch(PDO::FETCH_ASSOC) )
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
    
            
            catch ( PDOException $e )
            {
                $messageContainer	=	'Er ging iets mis: ' . $e->getMessage();
            }














?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>blabla</title>
    <style>
    
    
        #pensil {
            width: 5%;
        }
    
    </style>
</head>
<body>
   			
   			
   			
   			<form> 
   			
   			<input type="text" name="brnaam" value="brnaam" /><br/><br/>
   			<input type="text" name="adres" value="adres" /><br/><br/>
                <input type="text" name="postcode" value="postcode" /><br/><br/>
                <input type="text" name="gemeente" value="gemeente" /><br/><br/>
                <input type="text" name="omzet" value="omzet" /><br/><br/>
                <input type="submit" name="submit" value="update" /><br/><br/>
   			</form>
    			<table>
    			
    			<tbody>
    			<?php foreach ($fetchRow as $key => $bier): ?>
				<tr class="<?php echo (($key+1) %2 ==0)?"odd": "" ?>  ">
					<td><?php echo $key +1 ?></td>
					<?php foreach ($bier as $value): ?>
						<td><?php echo $value ?></td>
					
				
					
					<?php endforeach ?>
						<td><a href='rowanvanekeren-CRUD-update.php?deleteid=<?php echo $value ?>'><img src='icon-delete.png' /> </a> </td>
							<td><a  href='rowanvanekeren-CRUD-update.php?updateid=<?php echo $value ?>'><img id="pensil" src='pensil-icon.png' /> </a> </td>
				</tr>
			<?php endforeach ?>
			</tbody>
			</table>
</body>
</html>