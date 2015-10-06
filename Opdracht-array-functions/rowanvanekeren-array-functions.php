<?php
$animals[0]= "hond";
$animals[1]= "muis";
$animals[2]= "kat";
$animals[3]= "beer";
$animals[4]= "koe";
$animals[5]= "giraffe";
$animals[6]= "olifant";
$animals[7]= "geit";
$animals[8]= "schaap";
$animals[9]= "varken";


$zoek_dier = "big";
$message;
if(in_array($zoek_dier,$animals) == true){
    $message = " bestaat in de array";
    
}
else{
    $message = " bestaat niet in de array";
}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-concat</title>

    </head>
    <body>
	<p>	<?php echo count($animals)
     ?> <?php echo $zoek_dier . $message ?></p>


		
    </body>
</html>