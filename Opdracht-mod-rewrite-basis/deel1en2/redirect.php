<?php
	$baseName = '/' . basename(__FILE__) . '/';

	$root = preg_replace($baseName, '', __FILE__);

	$htaccess = file_get_contents($root .'/.htaccess');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1> redirect page</h1>
</body>
</html>