<?php
$rijen = 10;
$kolommen = 10;
$cijfer =0;
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

				    <td><?php echo $cijfer ?></td>
				    
				    
                    <?php  $cijfer++ ?>
			        <?php endfor ?>
                </tr>
			<?php endfor ?>
			
</table>
		
    </body>
</html>