<?php

	$baseName = '/' . basename(__FILE__) . '/';

	$root = preg_replace($baseName, '', __FILE__);

	$htaccess = file_get_contents($root .'/.htaccess');






?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>modrewrite basis</title>
</head>
<body>
 <h1>original</h1>
 <h1><?php var_dump($_GET) ?></h1>
</body>
</html>