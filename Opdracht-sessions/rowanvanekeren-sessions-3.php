<?php
session_start();

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-concat</title>

    </head>
    <body>
		<p>email: <?php echo $_SESSION["email"] ?>  <a href="rowanvanekeren-sessions-1.php?select=1">WIJZIG</a> </p>
   <p>nickname:<?php echo $_SESSION["nickname"] ?> <a href="rowanvanekeren-sessions-1.php?select=2">WIJZIG</a> </p>
   <p>straat:<?php echo $_SESSION["straat"] ?> <a href="rowanvanekeren-sessions-2.php?select=3">WIJZIG</a> </p>
   <p>nummer:<?php echo $_SESSION["nummer"] ?> <a href="rowanvanekeren-sessions-2.php?select=4">WIJZIG</a> </p>
   <p>gemeente:<?php echo $_SESSION["gemeente"] ?> <a href="rowanvanekeren-sessions-2.php?select=5">WIJZIG</a> </p>
   <p>postcode:<?php echo $_SESSION["postcode"] ?>  <a href="rowanvanekeren-sessions-2.php?select=6">WIJZIG</a></p>
  
		
    </body>
</html>