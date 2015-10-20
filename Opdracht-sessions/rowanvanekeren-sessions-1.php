<?php

session_start();

if(isset($_POST['submit'])){
   $_SESSION['email'] = $_POST['email'];
    
$_SESSION['nickname'] = $_POST['nickname'];
    
    header('location:rowanvanekeren-sessions-2.php');
}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht-concat</title>

    </head>
    <body>
  
    <form method="post" />
       <input type="text" value="email" name="email" <?php echo (isset($_GET['select']) && $_GET['select']  == "1"? "autofocus" : ""); ?>/><br/>
         <input type="text" value="nickname" name="nickname" <?php echo (isset($_GET['select']) && $_GET['select'] == "2"? "autofocus": ""); ?>/><br/>
            <input type="submit" value="next" name="submit" />
    </form>
  
		
   

		
    </body>
</html>