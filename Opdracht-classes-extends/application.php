<?php
  

$class_name = "Animal";

function __autoload($class_name) {
    include "classes/" . $class_name . '.php';
    include "classes/Lion.php";
    include "classes/Zebra.php";
}


$animal1  = new Animal("henk","transgender","50");

$animal2  = new Animal("oswalt","male","100");

$animal3  = new Animal("eric","vrouw","15");

$animal3->changeHealth(500);

$lion1 = new Lion("lil-pussy","male","50","reggae-lion");
$lion2 = new Lion("jef","male","2350","jazz-lion");

$zebra1 = new Zebra("lil-zebro","male","50","reggae-zebra");
$zebra2 = new Zebra("jos","male","23","jazz-zebra");
?>



<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-classes-extends</title>

   <h3><?php echo $animal1->getProtectedName(); ?> is een <?php echo $animal1->getProtectedGender(); ?> en heeft <?php echo $animal1->getProtectedHealth(); ?> health en zijn special move is <?php echo $animal1->doSpecialMove(); ?>  </h3>
   <h3><?php echo $animal2->getProtectedName(); ?> is een <?php echo $animal2->getProtectedGender(); ?> en heeft <?php echo $animal2->getProtectedHealth(); ?> health en zijn special move is <?php echo $animal2->doSpecialMove(); ?> </h3>
   <h3><?php echo $animal3->getProtectedName(); ?> is een <?php echo $animal3->getProtectedGender(); ?> en heeft <?php echo $animal3->getProtectedHealth(); ?> health en zijn special move is <?php echo $animal3->doSpecialMove(); ?></h3>
   
   <h1>instanties van LION</h1>
   
   <h3><?php echo $lion1->getProtectedName(); ?> 
   is een
    <?php echo $lion1->getProtectedGender(); ?> 
    en heeft
     <?php echo $lion1->getProtectedHealth(); ?>
      health en zijn special move is 
      <?php echo $lion1->doSpecialMove(); ?>
      en zijn soort is
      <?php echo $lion1->getSpecies(); ?>
      </h3>
     <h3><?php echo $lion2->getProtectedName(); ?> 
   is een
    <?php echo $lion2->getProtectedGender(); ?> 
    en heeft
     <?php echo $lion2->getProtectedHealth(); ?>
      health en zijn special move is 
      <?php echo $lion2->doSpecialMove(); ?>
      en zijn soort is
      <?php echo $lion2->getSpecies(); ?>
      </h3>
      
         <h1>instanties van ZEBRA</h1>
   
   <h3><?php echo $zebra1->getProtectedName(); ?> 
   is een
    <?php echo $zebra1->getProtectedGender(); ?> 
    en heeft
     <?php echo $zebra1->getProtectedHealth(); ?>
      health en zijn special move is 
      <?php echo $zebra1->doSpecialMove(); ?>
      en zijn soort is
      <?php echo $zebra1->getSpecies(); ?>
      </h3>
     <h3><?php echo $zebra2->getProtectedName(); ?> 
   is een
    <?php echo $zebra2->getProtectedGender(); ?> 
    en heeft
     <?php echo $zebra2->getProtectedHealth(); ?>
      health en zijn special move is 
      <?php echo $zebra2->doSpecialMove(); ?>
      en zijn soort is
      <?php echo $zebra2->getSpecies(); ?>
      </h3>
   
    </head>
    <body>
		
    <p> <?php      ?> </p>

		
    </body>
</html>