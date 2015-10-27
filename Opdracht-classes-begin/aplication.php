<?php

$class_name = "Percent";

    function __autoload($class_name) {
    include "classes/" . $class_name . '.php';
}

$obj  = new Percent(150,100);



?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-classes</title>

    </head>
    <body>
		
		<?php echo $obj->absolute ?>
		
    <table border="1" >
  <tr>
    <td>Absolute</td>
    <td><?php echo $obj->absolute ?></td>	
    
   
  </tr>
  <tr>
   <td>Relative</td>	
    
    <td><?php echo $obj->relative ?></td>		
    
  </tr>
  <tr>
   <td>Hundred</td>
   <td><?php echo $obj->hundred ?></td>
   
  </tr>
  
   </tr>
  <tr>
   <td>Nominal</td>
   <td><?php echo $obj->nominal ?></td>
   
  </tr>
</table>

		
    </body>
</html>