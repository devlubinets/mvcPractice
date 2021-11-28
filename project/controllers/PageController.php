<?php

namespace Project\Controllers;

use \Core\Controller;

class PageController extends Controller
{
    public array $pages = [
            1 => ['title'=>'страница 1', 'text'=>'текст страницы 1'],
            2 => ['title'=>'страница 2', 'text'=>'текст страницы 2'],
            3 => ['title'=>'страница 3', 'text'=>'текст страницы 3'],
        ];

    public function show()
    {
            echo 1;
            $params = 1;
            $this->title = $this->pages[$params]['title'];
            $arr = $this->pages[$params];
            $this->render('page/goshows123',['title'=>'страница 2', 'text'=>'текст страницы 2']);
    }
//    public function show1()
//    {
//      echo 1;
//    }
//
//    public function show2()
//    {
//      echo 2;
//    }

    public function act()
    {
//      return $this->render('page/act');
//        return $this->render('page/act', [
//            'var1' => 'eee',
//            'var2' => 'bbb',
//            'var3' => 'kkk',
        return $this->render('page/act', [
            'header' => 'список юзеров',
            'users'  => ['user1', 'user2', 'user3'],
        ]);
    }

}