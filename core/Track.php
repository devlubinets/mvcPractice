<?php

namespace Core;

class Track
{
    private string $controller;
    private string $action;
    private array $params;

    /**
     * @param string $controller
     * @param string $action
     * @param array $params
     */
    public function __construct(string $controller, string $action, array $params)
    {
        $this->controller = $controller;
        $this->action = $action;
        $this->params = $params;
    }

    public function __get($property)
    {
        return $this->$property;
    }

}