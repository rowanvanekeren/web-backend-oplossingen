<?php

$message;
$naam;

	try
	{
		if ( isset ( $_POST['submit'] ) )
		{
			
				if ( $_POST['text'] == '' )
				{
					throw new Exception( 'SUBMIT-ERROR' );
				}
				else
				{
					$naam	=	$_POST['text'];
				}
			
			
			
		}
	}
	catch ( Exception $e )
	{
	$messageCode = $e->getMessage();
		$message;
        $createMessage = false;
        
        switch($messageCode){
            case 'SUBMIT-ERROR':
                $message["type"] = "error";
                $message["text"] = 
                    "er werd met het formulier geknoeid";
                break;
            
                
        }

	}


?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-concat</title>

    </head>
    <body>
		<?php if ( $message ): ?>
		 	<div>
		 		<?= $message[ 'text' ] ?>
		 	</div>
		<?php endif ?>
   <form method="post">
       
       <input type="text" name="text" placeholder=<?php $text ?>/>
       <input type="submit" name="submit" />
       
       
       
       
   </form>

		
    </body>
</html>