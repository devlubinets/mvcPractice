<?php

namespace Core;

class Dispatcher
{
    public function getPage(Track $track):Page
    {
        $className = ucfirst($track->controller) . "Controller";
        $fullName = "\\Project\\Controllers\\$className";

      return  $currentController = (new $fullName)->{$track->action}($track->params);
    }
}