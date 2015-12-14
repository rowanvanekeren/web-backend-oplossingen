<?php
                   $email = explode("##", $_COOKIE["login"]); 
                    $db = new PDO('mysql:host=localhost;dbname=opdracht-file-upload','root','');
                    
                    $queryString = 'SELECT profile_picture FROM users where email like :emailsec';
                    
                    $statement = $db->prepare($queryString);
                    $statement->bindValue( ':emailsec', $email[0] );
                    
                    $statement->execute();
                    $fetchRowLog = array();
                    while ( $row = $statement->fetch(PDO::FETCH_ASSOC) )
                    {
                        $fetchRowLog[]	=	$row;
                    }
                    var_dump( $fetchRowLog);
                    
                    
                   
	if (isset($_POST['submit'])) 
	{

		if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/png"))
		&& ($_FILES["file"]["size"] < 2000000)) 
        {
           	define('ROOT', dirname(__FILE__));
				
				if (file_exists(ROOT . "/img/" . $_FILES["file"]["name"])) 
                {
					
				echo "bestand bestaat al";
				} 
                else
                {
                    move_uploaded_file($_FILES["file"]["tmp_name"], (ROOT . "/img/" . $_FILES["file"]["name"]));
                    echo "upload succes!!";
                    $dblog = new PDO('mysql:host=localhost;dbname=opdracht-file-upload','root','');
                    
                    $queryStringlog = 'UPDATE users SET profile_picture = :profile_picture where email like :email';
                    
                    
                    
                    
                    var_dump($email);
                    
                    var_dump($_FILES["file"] );
                    
                        
                    $statementlog = $dblog->prepare($queryStringlog);
            
                    $statementlog->bindValue( ':profile_picture', $_FILES["file"]["name"] );
                    $statementlog->bindValue( ':email', $email[0] );
            
                    $statementlog->execute();
                    

                }
        }
    }



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gegevens-wijzigen-form</title>
</head>
<body>
  
  
  <div>
      <h2> your current profile picture</h2>
      <img src="<?php echo (isset($fetchRowLog[0]["profile_picture"]))? "img/" . $fetchRowLog[0]["profile_picture"] : "img/default.jpg"  ?>"/>
    
  </div>
   <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
		
			<label for="file">Bestand:</label>
			<input type="file" name="file" id="file"> 

			<input type="submit" name="submit" value="Submit">
		</form> 
</body>
</html>