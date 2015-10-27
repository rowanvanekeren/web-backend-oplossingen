<?php
$headerb = "html/header-partial.php";
$bodyb = "html/body-partial.php";
$footerb = "html/footer-partial.php";


$class_name = "HTMLBuilder";
function __autoload($class_name) {
    include "classes/" . $class_name . '.php';
 
    
    
}
  $builder = new HTMLBuilder($headerb,$bodyb,$footerb);
$builder->includeHeader();
$builder->includeBody();
 $builder->includeFooter();









?>


