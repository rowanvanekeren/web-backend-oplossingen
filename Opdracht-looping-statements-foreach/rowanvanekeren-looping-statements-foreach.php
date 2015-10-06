<?php
$file_path = "text-file.txt";
$txt_file = file_get_contents($file_path);
$string;


for($i=0; $i < strlen($txt_file); $i++){
    
    $string[$i] = $txt_file[$i];
    
}








sort($string);
$rev = array_reverse($string);

$a = 0;
$b = 0;
$c = 0;
$d = 0;
$e = 0;
$f = 0;
$g = 0;
$h = 0;
$i = 0;
$j = 0;
$k = 0;
$l = 0;
$m = 0;
$n = 0;
$o = 0;
$p = 0;
$q = 0;
$r = 0;
$s = 0;
$t = 0;
$u = 0;
$v = 0;
$w = 0;
$x = 0;
$y = 0;
$z = 0;



foreach($rev as $value ){
 if($value == "a"){ 
     $a++;
    }
    if($value == "b"){ 
     $b++;
    }
    if($value == "c"){ 
     $c++;
    }
    if($value == "d"){ 
     $d++;
    }
    if($value == "e"){ 
     $e++;
    }
    if($value == "f"){ 
     $f++;
    }
      if($value == "g"){ 
     $g++;
    }
      if($value == "h"){ 
     $h++;
    }
    
      if($value == "i"){ 
     $i++;
    }
    
      if($value == "j"){ 
     $j++;
    }
    
      if($value == "k"){ 
     $k++;
    }
    
      if($value == "l"){ 
     $l++;
    }
      if($value == "m"){ 
     $m++;
    }
      if($value == "n"){ 
     $n++;
    }
      if($value == "o"){ 
     $o++;
    }
      if($value == "p"){ 
     $p++;
    }
      if($value == "q"){ 
     $q++;
    }
      if($value == "r"){ 
     $r++;
    }
      if($value == "s"){ 
     $s++;
    }
      if($value == "t"){ 
     $t++;
    }
      if($value == "u"){ 
     $u++;
    }
      if($value == "v"){ 
     $v++;
    }
      if($value == "w"){ 
     $w++;
    }
      if($value == "x"){ 
     $x++;
    }
      if($value == "y"){ 
     $y++;
    }
      if($value == "z"){ 
     $z++;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}


$totaal = $a + $b + $c+ $d+ $e+ $f+ $g+ $h+ $i+ $j+ $k+ $l+ $m+ $n+ $o+ $p+ $q+ $r+ $s+ $t+ $u+ $v+ $w+ $x+ $y+ $z;

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-concat</title>

    </head>
    <body>
		
    <p> <?php   echo " a=" . $a . " b=" . $b . " c=" . $c . " d=" . $d ." e=" . $e ." f=" . $f ." g=" . $g . " h=" . $h ." i=" . $i ." j=" . $j ." k=" . $k ." l=" . $l ." m=" . $m ." n=" . $n ." o=" . $o ." p=" . $p ." q=" . $q ." r=" . $r ." s=" . $s ." t=" . $t ." u=" . $u ." v=" . $v ." w=" . $w ." x=" . $x ." y=" . $y ." z=" . $z . " totaal=" . $totaal ?> </p>

		
    </body>
</html>