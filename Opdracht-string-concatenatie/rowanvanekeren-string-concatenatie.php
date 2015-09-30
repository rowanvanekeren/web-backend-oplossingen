<?php

$voornaam = "Rowan";
$achternaam = "van Ekeren";

$volledige_naam = $voornaam . $achternaam;

$aantal_characters = strlen($volledige_naam);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-concat</title>

    </head>
    <body>
		
<p> <?php echo $volledige_naam ?> <?php echo $aantal_characters ?></p>

		
    </body>
</html>