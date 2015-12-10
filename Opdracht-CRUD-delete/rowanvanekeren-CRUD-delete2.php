
<?php
	try
	{

            $db = new PDO('mysql:host=localhost;dbname=bieren','root',''); // Connectie maken
            $messageContainer	=	'Connectie dmv PDO geslaagd.';

                    $fetchRow = array();
    if(isset($_GET["deleteid"])){
           
      
          if(isset($_POST["yes"])){
            $queryStringsec = 'DELETE b FROM brouwers as b WHERE brouwernr=' . "'" . $_GET["deleteid"] . "'";
                 $statement = $db->prepare($queryStringsec);
          $statement->execute();
              header("Refresh:0; url=rowanvanekeren-CRUD-delete2.php");
        }
        else if(isset($_POST["no"])){
               header("Refresh:0; url=rowanvanekeren-CRUD-delete2.php");
        }
        
       
            
            
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
     tr:hover{
            background-color: indianred;
        }
    
        #hidden {
            visibility: hidden;
            
        }
    </style>
</head>
<body>
   			<div id=<?php echo (isset($_GET["deleteid"]))? "visible" : "hidden" ?> >
   			   <p> sure you wanna delete?</p>
  			        <form method="post">
   			       <input type="submit" name=yes value=yes /> 
   			       <input type="submit" name=no value=no />  
   			        
   			    </form>
   			    
   			    
   			</div>
   			
    			<table>
    			
    			<tbody>
    			<?php foreach ($fetchRow as $key => $bier): ?>
		<a class="hover">		<tr class="<?php echo (($key+1) %2 ==0)?"odd": "" ?>  ">
					<td><?php echo $key +1 ?></td>
					<?php foreach ($bier as $value): ?>
						<td><?php echo $value ?></td>
					
				
					
					<?php endforeach ?>
						<td><a href='rowanvanekeren-CRUD-delete2.php?deleteid=<?php echo $value ?>'><img src='icon-delete.png' /></a> </td>
			</tr> 	
			<?php endforeach ?>
			</tbody>
			</table>
</body>
</html>