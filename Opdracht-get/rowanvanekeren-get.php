<?php


  $art_array= array(
      
      
      array("titel" => 'Tandarts niet vervolgd',
        "datum" => "ma 12 okt 2015",
        "inhoud" =>"Zimbabwe laat weten af te zien van de uitlevering door de Verenigde Staten. De benodigde jachtpapieren van Palmer zijn in orde bevonden, zo deelde minister Muchinguri-Kashiri van Milieu maandag mee.
  De dood van de leeuw zorgde wereldwijd voor verontwaardiging. Palmer dook onder vanwege de woede waarmee hij werd overvallen. Vorige maand dook hij op en ging weer aan het werk.
  De tandarts had spijt betuigd maar tegelijk steeds volgehouden dat zijn jachtpartij legaal was. Hij is volgens de minister weer welkom in ZImbabwe, zij het als gewone toerist en niet als jager.",
  "afbeelding" =>"img/Leeuw.jpg" ,
  "afbeeldingsbeschrijving" => "Walter James Palmer (l), die op de foto overigens met een andere geschoten leeuw staat, doodde Cecil, de bekendste leeuw van Afrika."),
  
   array("titel" => 'Circus Herman Renz failliet',
        "datum" => "di 13 okt 2015",
        "inhoud" =>"De rechtbank stelt nu een curator aan om de zaak af te wikkelen. De Belastingdienst had het faillissement aangevraagd. Met het verdwijnen van het circus verliezen 65 mensen hun baan.
Het circus had tot 1 oktober de tijd gekregen om de schuld te betalen. De Belastingdienst zegt dat tot beslaglegging is overgegaan omdat de schuld niet is betaald. ,,Het circus heeft een plan ingediend om de schuld weg te kunnen werken, maar dat was niet voldoende. We zijn daarom tot beslaglegging overgegaan'', aldus een woordvoerder van de Belastingdienst eerder deze maand. Het circus had al een maand uitstel gekregen. Via een benefietconcert werd 15.000 euro opgehaald, maar daarmee kon niet de hele schuld worden afgelost.",
  "afbeelding" =>"img/Renz.jpg" ,
  "afbeeldingsbeschrijving" => "Medewerkers van de Belastingdienst halen spullen weg op het terrein waar Circus Herman Renz de tenten heeft opgeslagen."),
  
   array("titel" => 'Di Caprio werkt aan Volkswagen-film',
        "datum" => "ma 12 okt 2015",
        "inhoud" =>"Samen met filmstudio Paramount heeft de acteur de filmrechten verworven van het boek dat New York Times-journalist Jack Ewing over de crisis bij Volkswagen schrijft.
Behalve als acteur is Di Caprio ook een bekend milieuactivist. Of hij zelf een belangrijke rol in de film gaat spelen is nog niet bekend.",
  "afbeelding" =>"img/leonardo_dicaprio.jpg" ,
  "afbeeldingsbeschrijving" => "foto van Leonardo di Caprio")
  );
	$klein		=	false;



	if ( isset ( $_GET['id'] ) && array_key_exists( $_GET['id'] , $art_array ) )
	{
		


		
			$art_array			= array($art_array[$_GET['id']] );
            
			$klein	=	true;
		
			
	}


    

    
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-concat</title>
        <link rel="stylesheet" type="text/css" href="style.css">
   

      
       
        
         
           </head>
    <body>
        

        <?php foreach($art_array as $id => $value): ?>
        <div class="<?php echo (!$klein)? "klein": "groot" ?>">
        <h1><?php echo $value["titel"] ?></h1>
        
        <img src="<?php echo $value["afbeelding"] ?>"  />
        
        <p> 
           <?php  
echo (!$klein)? (substr( $value["inhoud"], 0, 50 )  . '...') :  $value["inhoud"];
          
             if (!$klein) echo "<a href='rowanvanekeren-get.php?id=". $id ."'> Lees meer!</a>"; 
            ?>
            </p>
        
        
    	</div>
       <?php endforeach ?>
     
       

		
    </body>
</html>