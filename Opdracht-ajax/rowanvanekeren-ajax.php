<?php 




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ajax</title>
</head>
<body>
                        <form method="post" action="contact.php">
                            <ul>
                                <li>
                                    <label for="email">E-mailadres</label>
                                    <input type="text" id="email" name="email">
                                </li>
                                <li>
                                    <label for="message">Boodschap</label>
                                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                                </li>
                                <li>
                                    <input type="checkbox" name="copy" id="copy">
                                    <label for="copy">Stuur een kopie naar mezelf</label>
                                </li>
                            </ul>
                            <input type="submit" name="submit">
                        </form>
  
</body>
</html>