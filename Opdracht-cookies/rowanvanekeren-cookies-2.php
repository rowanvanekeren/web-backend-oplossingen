<?php

$message = "";
if($_COOKIE["accept"]== "true")
{
    $message = "Welkom";
}



?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-concat</title>

    </head>
    <body>
        <h1><?php echo $message  ?></h1>
        <p><a href="rowanvanekeren-cookies.php?destroy=yes">uitloggen</a></p>

    <p> <?php      ?> </p>

		
    </body>
</html>