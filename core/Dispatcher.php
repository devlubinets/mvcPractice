<?php

namespace Core;

class Dispatcher
{
    public function getPage(Track $track)
    {
        $className = ucfirst($track->controller) . "Controller";
        $fullName = "\\Project\\Controllers\\$className";

        $currentController = (new $fullName)->{$track->action}($track->params);
    }
}