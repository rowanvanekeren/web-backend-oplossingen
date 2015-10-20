<?php


$error = "";


if(isset($_POST["submit"])){

    
    $array = explode(",", file_get_contents('login.txt'));
    if( $_POST['username'] == $array[0] && $_POST['password'] == $array[1] ){
    if(!isset($_GET["accept"])){
      setcookie("accept", "true", time() + 1000);}
       header("location:rowanvanekeren-cookies-2.php");
      
    }
    else{  
       
     $error = "inloggevens niet juist, probeer opnieuw";
    
    }
    
   
    

}
 if(isset($_GET["destroy"]) && $_GET["destroy"] == "yes"){
       
       setcookie("accept", "",time() - 3600); 
        echo "destroyed";
    }

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-concat</title>

    </head>
    <body>
        <<h1>Inloggen</h1>
       
        <p style="color:red"> <?php echo $error ?> </p>
        <form method="post">
            <p>gebruikersnaam</p>
            <input type="text" name="username"/>
            
            <p>wachtwoord</p>
            
            <input type="password" name="password"/><br/><br/>
            
            <input type="submit" name="submit" value="inloggen"/>
            
            
            
            
        </form>
   

		
    </body>
</html>