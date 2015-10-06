<?php
$jaar = 200;

$isSchrikkeljaar;

if($jaar % 4 ==0 && $jaar %100 != 0 || $jaar %400 ==0 ){
$isSchrikkeljaar = $jaar . " " . "Is een schrikkeljaar";
}
else{
$isSchrikkeljaar = $jaar . " " . "Is GEEN schrikkeljaar";

}


?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-concat</title>

    </head>
    <body>
		
		<p> <?php echo $isSchrikkeljaar; ?></p>


		
    </body>
</html>