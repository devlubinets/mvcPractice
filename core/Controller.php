<?php

namespace Core;

class Controller
{
    protected $layout = 'default';

    protected function render($view, $data): Page {
        return new Page($this->layout, $this->title, $view, $data);
    }
}