<?php
session_start();

  $dblog = new PDO('mysql:host=localhost;dbname=opdracht-security-login','root','');
          
             
            $queryStringlog = 'SELECT email, salt, hashed_password FROM users where email like :email';
          
$statementlog = $dblog->prepare($queryStringlog);
            
            $statementlog->bindValue( ':email', $_SESSION["email-login"] );
            
          $statementlog->execute();
                      $fetchRowLog = array();
                                    while ( $row = $statementlog->fetch(PDO::FETCH_ASSOC) )
            {
                $fetchRowLog[]	=	$row;
             
            }

$emaillogin = $_SESSION["email-login"];
$passwordlogin = $_SESSION["pw-login"];

$email = $fetchRowLog[0]["email"];
$salt = $fetchRowLog[0]["salt"];
$password = $fetchRowLog[0]["hashed_password"];

if($emaillogin == $email && hash('sha512', $passwordlogin . $salt) == $password){
    
    echo "login succesvol";
    sleep(2);
    setcookie("login", $email . "##" . hash('sha512', $email . $salt), time() + (86400 * 30), "/");
    header("location: dashboard.php");
}
else{
    echo "login niet gelukt";
}




?>