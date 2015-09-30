<?php
$fruit = "ananas";
$pos_fruit = strrpos($fruit, "a");
$upper_case = strtoupper($fruit);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-concat</title>

    </head>
    <body>
		<p>a op plaats: <?php echo $pos_fruit ?> string to uppercase: <?php echo $upper_case ?></p>


		
    </body>
</html>