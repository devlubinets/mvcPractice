<?php

namespace Core;

class Router
{
    public function getTrack(array $routes = [], string $uri = '')
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

//    private function getParams(string $currentRow, string $uri):array
//    {
//        $key = explode('\\',$currentRow);
//        $value = explode('\\:',$uri);
//
//        return array_combine($key,$value);
//    }

}