<?php
	$md5HashKey 	= 	'd1fa402db91a7a93c4f414b8278ce073';
	$needle1			=	"2";
	$needle2			=	"8";
	$needle3			=	"a";

	function telKarakters1( $haystack, $needle )
	{
		$haystackCount =  strlen( $haystack );

		$needleAantal = substr_count ( $haystack, $needle );

		$needleProcent = ( $needleAantal / $haystackCount ) * 100;

		return $needleProcent;
	}

	function telKarakters2( $needle )
	{
		global $md5HashKey;

		$haystack = $md5HashKey;

		$haystackCount =  strlen( $haystack );

		$needleAantal = substr_count ( $haystack, $needle );

		$needleProcent = ( $needleAantal / $haystackCount ) * 100;

		return $needleProcent;
	}

	function telKarakters3( $needle )
	{
		$haystack = $GLOBALS['md5HashKey'];

		$haystackCount =  strlen( $haystack );

		$needleAantal = substr_count ( $haystack, $needle );

		$needleProcent = ( $needleAantal / $haystackCount ) * 100;

		return $needleProcent;
	}

	$eersteMethode 	=	telKarakters1( $md5HashKey, $needle1 );
	$tweedeMethode 	=	telKarakters2( $needle2 );
	$derdeMethode 	=	telKarakters3( $needle3 );

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-concat</title>

    </head>
    <body>
		
    <p> <?php echo $eersteMethode . "  " . $tweedeMethode . "  " .  $derdeMethode   ?> </p>

		
    </body>
</html>