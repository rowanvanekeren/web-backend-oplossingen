
<?php

session_start();
$bool = false;
                 //isset toevoegen..   
                      $explode = explode("##",$_COOKIE["login"] );
                
                      
            $dblog = new PDO('mysql:host=localhost;dbname=opdracht-file-upload','root','');
          
             
            $queryStringlog = 'SELECT email, salt, hashed_password FROM users where email like :email';
          
$statementlog = $dblog->prepare($queryStringlog);
            
            $statementlog->bindValue( ':email', $explode[0] );
            
          $statementlog->execute();
                      $fetchRowLog = array();
                                    while ( $row = $statementlog->fetch(PDO::FETCH_ASSOC) )
            {
                $fetchRowLog[]	=	$row;
             
            }
                     
                          
               if($explode[1] == hash('sha512', $explode[0] . $fetchRowLog[0]["salt"])) {
              
                   $bool=true;
               }
                else{
                    unset($_COOKIE["login"]);
                }

            if(isset($_GET["cookie"])){
                echo "u bent uitgelogd";
                unset($_COOKIE["login"]);
                setcookie("login", $_SESSION[ 'email' ], time() -1,"/");
           
            }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
   <?php if ($bool == true): ?> <h1>Dashboard</h1><br/>
    
    <a href="dashboard.php?cookie=destroy">Uitloggen</a>
     <a href="gegevens-wijzigen-form.php">Gegevens wijzigen</a>
    
    <?php endif ?>
</body>
</html>