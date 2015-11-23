<?php
   if(isset($_POST["submit"]) && $_POST["brnaam"] != "")
         {  
try
{
               $db = new PDO('mysql:host=localhost;dbname=bieren','root',''); // Connectie maken
            $messageContainer	=	'Connectie dmv PDO geslaagd.';
        $fetchRow = array();
      
   
    
    

    $queryString = 'INSERT INTO brouwers(brnaam,adres,postcode,gemeente,omzet) VALUES(:brnaam,:adres,:postcode,:gemeente,:omzet)';
           $statement = $db->prepare($queryString);  
			$statement->bindValue( ':brnaam', $_POST[ 'brnaam' ] );
			$statement->bindValue( ':adres', $_POST[ 'adres' ] );
			$statement->bindValue( ':postcode', $_POST[ 'postcode' ] );
			$statement->bindValue( ':gemeente', $_POST[ 'gemeente' ] );
			$statement->bindValue( ':omzet', $_POST[ 'omzet' ] );

     
          $statement->execute();
             
    $fetchRow = array();
        $queryString2 = 'SELECT brouwernr FROM brouwers WHERE brnaam like :brnaams';
         $statement2 = $db->prepare($queryString2); 
        $statement2->bindValue( ':brnaams', $_POST[ 'brnaam' ] );
          $statement2->execute();
                        while ( $row = $statement2->fetch( PDO::FETCH_ASSOC) )
                    {
                        $fetchRow[]	=	$row;

                    }
       foreach($fetchRow as $key => $value) {
  echo "plaats in array = " . $key . " " ;
  echo "brouwerij nummer = ". $value["brouwernr"];
}
                     } 

catch( PDOException $e ){
    $messageContainer	=	'Er ging iets mis: ' . $e->getMessage();
    
}
       
       }
else{
    echo "vul minimaal een naam in";
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-concat</title>

    </head>
    <body>
		
   <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <p>brouwerij naam</p>   
       <input type="text" name="brnaam"></input>
        <p>adres</p>   
       <input type="text" name="adres"></input>  
        <p>postcode</p>   
       <input type="text" name="postcode"></input>  
        <p>gemeente</p>   
       <input type="text" name="gemeente"></input>
           <p>omzet</p>   
       <input type="text" name="omzet"></input> <br/>   <br/>      
       <input type="submit" name="submit"></input> 
       
       
       
   </form>

		
    </body>
</html>