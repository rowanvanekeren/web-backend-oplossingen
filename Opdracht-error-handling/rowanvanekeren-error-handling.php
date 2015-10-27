<?php

$message;
$naam;
	try
	{
		if ( isset ( $_POST['submit'] ) )
		{
			try
			{
				if ( $_POST['text'] == '' )
				{
					throw new Exception( 'invulveld is leeg' );
				}
				else
				{
					$naam	=	$_POST['text'];
				}
			}
			catch( Exception $e )
			{
				throw new Exception( $e->getMessage() );
			}
			
		}
	}
	catch ( Exception $e )
	{
	
		$message['text']	=	$e->getMessage();

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