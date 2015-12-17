
<?php 

	if (isset($_POST['submit'])) 
	{

		if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/png"))
		&& ($_FILES["file"]["size"] < 2000000)) 
        {
           	define('ROOT', dirname(__FILE__));
				
				if (file_exists(ROOT . "/img/" . $_FILES["file"]["name"])) 
                {
					
				echo "bestand bestaat al";
				} 
                else
                {
                    move_uploaded_file($_FILES["file"]["tmp_name"], (ROOT . "/img/" . $_FILES["file"]["name"]));
                    echo "upload succes!!";
    

                    	$thumbDimensions['w']	=	100;
	                    $thumbDimensions['h']	=	100;
                    
                    
	$imageFile	=	"img/" . $_FILES["file"]["name"];


	$fileParts	=	pathinfo($imageFile);
	$fileName	=	$fileParts['filename'];
	$ext		=	$fileParts['extension'];
  
                    
           var_dump($fileParts);

	$thumbDimensions['w']	=	100;
	$thumbDimensions['h']	=	100;

	
	list($width, $height)	=	getimagesize($imageFile); 
	switch (strtolower($ext))
	{
		case ('jpg'):
            $source 	= 	imagecreatefromjpeg($imageFile);
            echo $source;
			break;
		case ('jpeg'):
			$source 	= 	imagecreatefromjpeg($imageFile);
			break;
			
		case ('png'):
			$source 	=	imagecreatefrompng($imageFile);
			break;

		case ('gif'):
			$source 	=	imagecreatefromgif($imageFile);
			break;
	}

	$thumb 	=	imagecreatetruecolor($thumbDimensions['w'], $thumbDimensions['h']);

	imagecopyresized($thumb, $source, 0,0,0,0, $thumbDimensions['w'],$thumbDimensions['h'], $width, $height);


	switch (strtolower($ext))
	{
		case ('jpg'):
		case ('jpeg'):
			$resized 	= 	imagejpeg($thumb, ($fileName. '_thumb.' . $ext), 100);
			break;
			
		case ('png'):
			$resized 	=	imagepng($thumb, ($fileName. '_thumb.' . $ext), 100);
			break;

		case ('gif'):
			$resized 	=	imagegif($thumb, ($fileName. '_thumb.' . $ext));
			break;
	}
                }
        }
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>image manipulation</title>
</head>
<body>
      
      <img src="<?php echo (isset($_FILES["file"]["name"]))? "img/" . $_FILES["file"]["name"] : "" ?>"/>
      
      <img src="<?php echo $fileName ?>_thumb.jpg" alt=""/>
   
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
		
			<label for="file">Bestand:</label>
			<input type="file" name="file" id="file"> 

			<input type="submit" name="submit" value="Submit">
		</form> 
    
</body>
</html>