<?php

namespace Core;

require_once 'vendor/autoload.php';

$routes = require $_SERVER['DOCUMENT_ROOT'] . '/project/config/routes.php';


$track = (new Router)->getTrack($routes, $_SERVER['REQUEST_URI']);
$page = (new Dispatcher)->getPage($track);

$str =  (new View) -> render($page);

echo $str;