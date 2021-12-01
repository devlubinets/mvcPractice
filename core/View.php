<?php

namespace Core;

class View
{
    /**
     * @param Page $page
     * @return false|string|void
     */
    public function render(Page $page)
    {
        return $this->renderLayout($page, $this->renderView($page));
    }

    /**
     * Метод подставляет в слой переменые title и другие
     * @param Page $page
     * @param $content
     */
    private function renderLayout(Page $page, $content)
    {
        $documentRoot = $_SERVER['DOCUMENT_ROOT'];
        $layoutPath = $documentRoot . '/project/layouts/'."{$page->layout}.php";

        if(file_exists($layoutPath)) {
            $title = $page->title;
            $layout = require $layoutPath;
            return $layout;
        }
    }

    /**
     * Получает файл представления и подставляет в него данные полученные от Модели
     * @param Page $page
     */
    private function renderView(Page $page)
    {
        $documentRoot = $_SERVER['DOCUMENT_ROOT'];
        $viewPath = $documentRoot . '/project/view/'."{$page->view}.php";

        if(file_exists($viewPath)) {
            extract($page->data);
            $view = require $viewPath;
            return $view;
        }
    }

}