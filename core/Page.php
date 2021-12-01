<?php

namespace Core;

class Page
{
    private string $layout;
    private string $title;
    private string $view;
    private string $data;

    public function __construct(string $layout,string $title,string $view,string $data)
    {
        $this->layout = $layout;
        $this->title  = $title;
        $this->view   = $view;
        $this->data   = $data;
    }

    public function __get(string $property)
    {
        return $this->$property;
    }
}