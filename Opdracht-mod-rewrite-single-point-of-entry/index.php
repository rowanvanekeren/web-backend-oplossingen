<?php

$class_name = "bieren";
function __autoload($class_name) {
    include "classes/" . $class_name . ".php";
 
    
    
}

$bieren = new bieren();
switch ($_GET["method"]){
    case "overview":
        $bieren->overview();
            break;
        case "insert":
        $bieren->insert();
            break;
    
        case "update":
        $bieren->update();
            break;
    
        case "delete":
        $bieren->delete();
            break;
    
    
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>singlepointofentry</title>
</head>
<body>
    <?php var_dump($_GET) ?>
</body>
</html>