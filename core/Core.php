<?php

namespace Core;

class Core
{
    public function run():void
    {

        $routes = require $_SERVER['DOCUMENT_ROOT'] . '/project/config/routes.php';

        $track = (new Router)->getTrack($routes, $_SERVER['REQUEST_URI']);
        $page = (new Dispatcher)->getPage($track);

        $str =  (new View) -> render($page);

        echo $str;
    }
}