<?php

namespace Core;

class Controller
{
    protected function render($view, $data, $layout, $title): Page {
        return new Page($layout, $title, $view, $data);
    }
}