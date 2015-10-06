<?php
$getal =1;
$dag;

	if($getal == 1){$dag = "maandag";};
	if($getal == 2){$dag = "dinsdag";};
	if($getal == 3){$dag = "woensdag";};
	if($getal == 4){$dag = "donderdag";};
	if($getal == 5){$dag = "vrijdag";};
	if($getal == 6){$dag = "zaterdag";};
	if($getal == 7){$dag = "zondag";};

$upper_dag = strtoupper($dag);

$dag_A= $upper_dag;

$dag_B = str_replace("A", "a", $dag_A);

$dag_C = strpos($dag_A,"A"); 



if($dag)

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-concat</title>

    </head>
    <body>
		<p><?php echo $upper_dag ?>  <?php echo $dag_B ?> <?php echo $dag_C ?></p>


		
    </body>
</html>