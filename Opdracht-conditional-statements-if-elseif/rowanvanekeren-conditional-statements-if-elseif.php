<?php
$jaar = rand(1, 101);
$antw;

if($jaar >= 0 && $jaar <=10){
    $antw = "getal ligt tussen 0 en 10";
}
else if ($jaar >= 11 && $jaar <=20){
    $antw = "getal ligt tussen 10 en 20";
}
else if ($jaar >= 21 && $jaar <=30){
    $antw = "getal ligt tussen 20 en 30";
}
else if ($jaar >= 31 && $jaar <=40){
    $antw = "getal ligt tussen 30 en 40";
}
else if ($jaar >= 41 && $jaar <=50){
    $antw = "getal ligt tussen 40 en 50";
}
else if ($jaar >= 51 && $jaar <=60){
    $antw = "getal ligt tussen 50 en 60";
}
else if ($jaar >= 61 && $jaar <=70){
    $antw = "getal ligt tussen 60 en 70";
}
else if ($jaar >= 71 && $jaar <=80){
    $antw = "getal ligt tussen 70 en 80";
}
else if ($jaar >= 81 && $jaar <=90){
    $antw = "getal ligt tussen 80 en 90";
}
else {
    $antw = "getal ligt tussen 90 en 100";
}

$omgekeerd = strrev ($jaar . " ".  $antw);

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht ifelseif</title>

    </head>
    <body>
		
<p> <?php echo $jaar ?> <?php echo $antw ?> <br/>   <?php echo $omgekeerd ?>       </p>

		
    </body>
</html>