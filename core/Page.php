<?php

namespace Core;

class Page
{
    private string $layout = 'default';
    private string $title = 'default';
    private string $view;
    private array $data;

    /**
     * @param string $layout
     * @param string $title
     * @param string $view
     * @param array $data
     */
    public function __construct(string $layout,string $title,string $view,array $data)
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

    public function getData():array
    {
        return $this->data;
    }
}