<?php
$rijen = 10;
$kolommen = 10;

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-concat</title>

    </head>
    <body>
	
 




    
 
    
    
    
    
    
    
    
    
    <table border="1">
			<?php for( $b = 0; $b < $rijen; ++$b ): ?>

				<tr>
				   <?php for( $i = 0; $i < $kolommen; ++$i ): ?>

				    <td>kolom</td>
				    

			        <?php endfor ?>
                </tr>
			<?php endfor ?>
			
</table>
		
    </body>
</html>