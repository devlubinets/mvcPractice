<?php
	namespace Core;

    require_once 'vendor/autoload.php';

	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	
	#require_once $_SERVER['DOCUMENT_ROOT'] . '../project/config/connection.php';
    require_once 'project/config/connection.php';

	$routes = require 'project/config/routes.php';
	
	$track = ( new Router )      -> getTrack($routes, $_SERVER['REQUEST_URI']);
	$page  = ( new Dispatcher )  -> getPage($track);
	
	echo (new View) -> render($page);
