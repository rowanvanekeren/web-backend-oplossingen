<?php

$md5HashKey = 'd1fa402db91a7a93c4f414b8278ce073';
  


function nummerEen($karakter,$string){
    
    $string_length = strlen($string);
    $aant_char = substr_count($string,$karakter);
     $percent =$aant_char / $string_length * 100;
    return $percent;
    
    
}

function nummerTwee($karakter){
    global $md5HashKey;
    $string_length = strlen($md5HashKey);
   $aant_char =substr_count($md5HashKey,$karakter);
     $percent =$aant_char / $string_length * 100;
    return $percent;
    
}

function nummerDrie($karakter){
   $string = $GLOBALS['md5HashKey'];
    $string_length = strlen($string); 
    $aant_char =substr_count($string,$karakter);
    
    $percent =$aant_char / $string_length * 100;
    return $percent;
    
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-concat</title>

    </head>
    <body>
		
    <p><?php echo  nummerEen('2',$md5HashKey) . "en" . nummerTwee('8') . "en" . nummerDrie('a') ?> </p>

		
    </body>
</html>