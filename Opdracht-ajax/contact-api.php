<?php
   //var_dump($_POST);
//$admin = $_POST["email"];
if (isset($_POST['email'])) 
	{
     
		$aan 			= 	$_POST['email'];
		$titel 			= 	"berichtjeee";
		$bericht 		= 	"<body>" . $_POST['message'] . "</body>";
		$afzenderEmail 	= 	"rowanvanekeren@gmail.com";
    
        $headers = "From: " . $afzenderEmail . "\r\n";

        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		
        $headersback 		= 	'From: '. $aan;
        $headersback .= "MIME-Version: 1.0\r\n";
        $headersback .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
        $dblog = new PDO('mysql:host=localhost;dbname=opdracht-ajax','root','');
          
             
            $queryStringlog = 'INSERT into mails (email,message,time_sent) VALUES (:email, :message, now() )';
          
            $statementlog = $dblog->prepare($queryStringlog);
            
            $statementlog->bindValue( ':email', $aan );
            $statementlog->bindValue( ':message', $bericht );
            //$statementlog->bindValue( ':datetime', date('m/d/Y h:i:s'));
            
            $statementlog->execute();
                      $fetchRowLog = array();
		//mail( $aan, $titel, $bericht, $headers );
    if(isset($_POST["copy"])){
        
        //mail( $aan, $titel, $bericht, $headersback );
        echo "berichtkopie verzonden";
        header("location: rowanvanekeren-ajax.php");
    }
    
    echo json_encode( array('status'=> 'test') );
    //header("location: rowanvanekeren-ajax.php");

	}




?>