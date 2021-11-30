<?php

namespace Core;

require_once 'vendor/autoload.php';

echo '$_SERVER[\'DOCUMENT_ROOT\'] = '. $_SERVER['DOCUMENT_ROOT'];
echo '<br>';
echo '$_SERVER[\'REQUEST_URI\'] = '. $_SERVER['REQUEST_URI'];
echo '<br>';
echo require $_SERVER['DOCUMENT_ROOT'] . '/project/config/routes.php';
$routes = require $_SERVER['DOCUMENT_ROOT'] . '/project/config/routes.php';


$track = (new Router)->getTrack($routes, $_SERVER['REQUEST_URI']);
$page = (new Dispatcher)->getPage($track);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main page</title>
</head>
<body>
<h1>   Hello  </h1>
</body>
</html>
