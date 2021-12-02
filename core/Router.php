<?php

namespace Core;

class Router
{
    public function getTrack(array $routes = [], string $uri = ''):Track
    {
        if (empty($routes)) {
            //TODO обработчик ошибки или завершить анализ потому что нет роутов
        }

        foreach ($routes as $currentRow) {
            if($currentRow->__get('path') === $uri) {
                //TODO реализовать позже выборку параметров
                //$params =  $this->getParams($currentRow ,$uri);
                return new Track($currentRow->controller, $currentRow->action /*$params*/);
            }
        }
        return new Track('error','notFound');
    }

}