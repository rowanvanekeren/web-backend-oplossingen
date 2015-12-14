<?php 
session_start();


if(isset($_POST["submit"])){
     $_SESSION["email"] = $_POST["email"];
    $_SESSION["password"] = $_POST["password"];
    header( "Location: registratie-proces.php " );
}


if(isset($_GET["emailexist"])){
    if($_GET["emailexist"] == "true")
    {
        echo "email already exists, try other";
    }
}
if(isset($_GET["passworderror"])){
    if($_GET["passworderror"] == "true")
    {
        echo "please enter password";
    }
}

if(isset($_GET["emailempty"])){
    if($_GET["emailempty"] == "true")
    {
        echo "please enter email";
    }
}

if(isset($_GET["emailnotvalid"])){
    if($_GET["emailnotvalid"] == "true")
    {
        echo "email not valid";
    }
}
    
$length = 8;
$password = GeneratePassword(8);
function GeneratePassword($length){

$password = "";
    
for($i = 0; $i < $length; $i++){
  
    $ascii = rand(65,90);
 $password .= chr($ascii); 
    
}
    return $password;
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Security</title>
</head>
<body>
    <form method="post">
        <input type="text" name="email" value="<?php echo (isset($_POST["email"]))? $_POST["email"] : "" ?>" placeholder="voer uw email in"/><br/><br/>
        <input type="text" name="password" value="<?php echo (isset($_POST["generatepw"]))? $password : "" ?>" placeholder="voer uw wachtwoord in"/>
        <input type="submit" name="generatepw" value=" genereer wachtwoord" />
        <input type="submit" name="submit" value="submit" />
        
    </form>
</body>
</html>