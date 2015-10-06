<?php



function berekenSom ($getal1,$getal2){
    
    
  return $getal1 + $getal2; 
    
}
$som = berekenSom(5,5);
function vermenigvuldig ($getal1,$getal2){
    
    
  return $getal1 * $getal2; 
    
}
$keer = vermenigvuldig(5,5);

function isEven($getal1){
    
    if($getal1 % 2 == 0){
        return true;}
    else
    {return false;}
  
    
}
$iseven = isEven(4);

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-concat</title>

    </head>
    <body>
		
    <p> <?php   echo "optellen" .  $som . " vermenigvuldigen" . $keer . "  is even ?" . $iseven    ?> </p>

		
    </body>
</html>