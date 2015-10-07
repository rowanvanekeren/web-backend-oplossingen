<?php
$geld = 100000;
$rente = 1.08;



function berekenen ( $getal){
static $jaar = 0;
    if($jaar < 10){
    $jaar++;
        echo " jaar= " . $jaar . " bedrag= " . $getal . " ";
    $geld = berekenen($getal * 1.08);
   
    
}



}

 berekenen($geld);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-concat</title>

    </head>
    <body>
		
    <p> <?php      ?> </p>

		
    </body>
</html>