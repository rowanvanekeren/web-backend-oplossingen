<?php
$username = "rowan";
$password = "test";

$message = "";





 if(isset($_POST["submit"])){
 
     
  if($_POST["username"] == $username && $_POST["password"] == $password){
  
  
  $message = "Welkom";
  
  }else{
  
  $message = "login niet gelukt, probeer opnieuw";
  
  }
         


 }
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-concat</title>

    </head>
    <body>
    
   
   
    
     <h1> <?php echo $message ?></h1>
		<form  action="rowanvanekeren-post.php" method="post">
		     <label for="username">username</label>
		   <input type="text" name="username" id="text"> 
		    
		     <label for="password">password</label>
		   <input type="password" name="password" id="password"> 
		   
		   
		      <input type="submit" name="submit" value="Submit">
		    
		    
		    <p><?php echo var_dump($_POST) ?> </p>
		    
		</form>
    

		
    </body>
</html>