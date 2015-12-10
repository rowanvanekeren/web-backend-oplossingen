<?php 
//$hasCaptions = false;
//$hasNumbers = false;
//$hasSpecialSigns = false;
unset($_COOKIE["login"]);
session_start();
$email_a = "";

$fetchRow = array();
if(isset($_SESSION["email"])){
    $email_a = $_SESSION["email"];
   
}




$_SESSION["notification"] =  array(
    "type" => array("error","valid", "invalid"),
    "message" => array("something went wrong","this $email_a is considered valid","$email_a is invalid")

);

        if ( filter_var($email_a, FILTER_VALIDATE_EMAIL) && isset($_SESSION["email"]) ) {
            //echo $_SESSION["notification"]["message"][1];
            $db = new PDO('mysql:host=localhost;dbname=opdracht-security-login','root','');
            
             
            $queryString = 'SELECT email FROM users where email like :email';
           $statement = $db->prepare($queryString);
            $statement->bindValue( ':email', $_SESSION[ 'email' ] );
            
          $statement->execute();
            
              while ( $row = $statement->fetch(PDO::FETCH_ASSOC) )
            {
                $fetchRow[]	=	$row;
             
            }
          
         if(isset($fetchRow[0]["email"]) && $fetchRow[0]["email"] == $_SESSION["email"] ){
             echo "email staat al in het systeem";
           header( "Location: rowanvanekeren-security-login.php?emailexist=true " );
          }
            else if(!isset($fetchRow[0]["email"])){
               
                  if(isset($_SESSION["password"]) && $_SESSION["password"] != ""){
                      
                      $salt = uniqid(mt_rand(), true);
                      $password = $_SESSION["password"];
                      $concat = $password . $salt;
                      $hash = hash('sha512', $concat);
                        
                          
                      $dbinput = new PDO('mysql:host=localhost;dbname=opdracht-security-login','root','');
            
             
                        $queryStringInput = 'INSERT INTO users (email,salt,hashed_password,last_login_time) VALUES (:email,:salt,:hashed_password,:last_login_time)';
                        $statementinput = $dbinput->prepare($queryStringInput);
                        $statementinput->bindValue( ':email', $_SESSION[ 'email' ] );
                        $statementinput->bindValue( ':salt', $salt );
                        $statementinput->bindValue( ':hashed_password', $hash );
                        $statementinput->bindValue( ':last_login_time', date('Y-m-d') );
                       
                        $statementinput->execute();      
                        $saltedcookie = $_SESSION[ 'email' ] . $salt;
                         echo "succesfully registered"; 
                    
                      setcookie("login", $_SESSION[ 'email' ] . "##" . hash('sha512', $saltedcookie), time() + (86400 * 30), "/");
                      
                        
                        header("location: dashboard.php?");
                          
                  }
                    else{
                      
                         header( "Location: rowanvanekeren-security-login.php?passworderror=true " );
                    }
                
                
            };
           
            
        }
        else if(isset($_SESSION["email"]) && $_SESSION["email"] == ""){
   header( "Location: rowanvanekeren-security-login.php?emailempty=true " );
}
else{
    header( "Location: rowanvanekeren-security-login.php?emailnotvalid=true " );
}





?>