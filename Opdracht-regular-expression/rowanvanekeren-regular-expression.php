<?php

if(isset($_POST["string"]) && isset($_POST["regex"])){
$searchString = $_POST["string"];
$regex = "/" . $_POST["regex"] . "/";
$Result	= preg_replace($regex, '#', $searchString);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>regular expression</title>
</head>
<body>
                     <div>
                        
                        <h1>RegEx tester</h1>

                        <form action="" method="post">

                        <ul>
                            <li>
                                <label for="regex">Regular Expression</label>
                                <input type="text" name="regex" id="regex">
                            </li>
                            <li>
                                <label for="string">String</label>                            
                                <textarea name="string" id="string" cols="30" rows="10">
                                   
                                </textarea>
                            </li>
                            <li>
                                <input type="submit" name="submit" id="submit">
                            </li>
                        </ul>
                            
                        </form>
<h1>De string is nu: <?php echo (isset($Result))? $Result : "" ?></h1>
                     </div>


</body>
</html>