<?php
session_start();
if(isset($_GET["login"])){
    if($_GET["login"] == "false"){
        echo "u moet eerst inloggen";
    }
}
if(isset($_POST["submit-login"])){
   $_SESSION["email-login"] = $_POST["email-login"];
    $_SESSION["pw-login"] = $_POST["pw-login"];
    
    
    header("location: login-proces.php");
}
    



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login-page</title>
</head>
<body>
    <form method="post">
        <input type="text" name="email-login" placeholder="email" />
         <input type="text" name="pw-login" placeholder="password" />
        <input type="submit" name="submit-login" value="submit" />
        
    </form>
    
    <p>nog geen account? ga naar de <a href="rowanvanekeren-security-login.php">registratie pagina</a></p>
</body>
</html>