<?php
session_start();

if(isset($_GET["destroy"]) == "yes"){
    
    session_destroy();
    header("location:rowanvanekeren-sessions-1.php");
   
}
if(isset($_POST["submit"])){
    
    
    header("location:rowanvanekeren-sessions-3.php");
    
}

if(isset($_POST["straat"])){
$_SESSION["straat"] = $_POST["straat"];
$_SESSION['nummer'] = $_POST["nummer"];
$_SESSION["gemeente"] = $_POST["gemeente"];
$_SESSION["postcode"]   = $_POST["postcode"];}
 ?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-concat</title>

    </head>
    <body>
    <h1> registratie gegevens</h1>
    <p>E-mail = <?php echo $_SESSION['email'] ?></p>
    <p>Nickname = <?php echo $_SESSION['nickname'] ?></p>
    <form method="post">
       <input type="text" value="<?php echo (isset($_SESSION['straat'])? $_SESSION["straat"] : "straat"); ?>" name="straat" <?php echo (isset($_GET['select']) && $_GET['select'] == "3"? "autofocus" : ""); ?>/><br/>
         <input type="text" value="<?php echo (isset($_SESSION['nummer'])? $_SESSION["nummer"] : "nummer"); ?>" name="nummer" <?php echo (isset($_GET['select']) && $_GET['select'] == "4"? "autofocus" : ""); ?>/><br/>
          <input type="text" value="<?php echo (isset($_SESSION['gemeente'])? $_SESSION["gemeente"] : "gemeente"); ?>" name="gemeente" <?php echo (isset($_GET['select']) && $_GET['select'] == "5"? "autofocus" : ""); ?>/><br/>
            <input type="text" value="<?php echo (isset($_SESSION['postcode'])? $_SESSION["postcode"] : "postcode"); ?>" name="postcode" <?php echo (isset($_GET['select']) && $_GET['select'] == "6"? "autofocus" : ""); ?>/><br/>
            <input type="submit" value="submit" name="submit"/><br/>

      </form>
        <a href="rowanvanekeren-sessions-2.php?destroy=yes"> Destroy session</a>
  

		
    </body>
</html>