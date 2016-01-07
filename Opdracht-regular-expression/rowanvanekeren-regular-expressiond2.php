
<?php








?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>reg d2</title>
</head>
<body>
    <h1>deel2</h1>
      <p>Match alle letters tussen a en d, en u en z (hoofdletters inclusief)</p>
    <p>String:Memory can change the shape of a room; it can change the color of a car. And memories can be distorted. They're just an interpretation, they're not a record, and they're irrelevant if you have the facts.</p>
    <p>regex: /[a-d][A-D][u-z][U-Z] werkt niet het is [a-dA-Du-zU-Z] / </p>
    <p style="color:red">result: <?php echo preg_replace("/[a-dA-Du-zU-Z]/","#", "Memory can change the shape of a room; it can change the color of a car. And memories can be distorted. They're just an interpretation, they're not a record, and they're irrelevant if you have the facts.") ?> </p>
    
    <p>Match zowel colour als color</p>
    <p>String: Zowel colour als color zijn correct Engels.</p>
    <p>regex: /colou?r/ </p>
    <p style="color:red">result: <?php echo preg_match("/colou?r/", "Zowel colour als color zijn correct Engels") ?> </p>
    
    
    <p>Match enkel de getallen die een 1 als duizendtal hebben.</p>
    <p>String: 1020 1050 9784 1560 0231 1546 8745</p>
    <p>regex: /1\d{3}/ </p>
    <p style="color:red">result: <?php echo preg_replace("/1\d{3}/","#", "1020 1050 9784 1560 0231 1546 8745") ?> </p>  
    
    <p>Match alle data zodat er enkel een reeks "en" overblijft.</p>
    <p>String: 24/07/1978 en 24-07-1978 en 24.07.1978</p>
    <p>regex: /\d{2}[\/\-\.]\d{2}[\/\-\.]\d{4}/ </p>
    <p style="color:red">result: <?php echo preg_replace("/\d{2}[\/\-\.]\d{2}[\/\-\.]\d{4}/","#", "24/07/1978 en 24-07-1978 en 24.07.1978") ?> </p>
    
</body>
</html>