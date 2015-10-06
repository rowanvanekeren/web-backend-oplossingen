<?php
$getal = 0;
$getal_2 = 0;

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-concat</title>

    </head>
    <body>
		
    <p> <?php 
    while($getal <= 100){
    echo $getal . ", ";
    $getal++;
    
    
}   
        
        ?> <br/><br/>
        
        
        <?php 
    while($getal_2 <= 100){
    if($getal_2 % 3 == 0 && $getal_2 >= 40 && $getal_2 <= 80){
        
        echo $getal_2 . ", ";
    }
    $getal_2++;
    
    
}   
        
        ?>
         
          
           
            
             
              
               
                 </p>

		
    </body>
</html>