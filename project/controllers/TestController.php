<?php

namespace Project\Controllers;

use Core\Controller;
use Core\Page;
use Project\Models\Test;

class TestController extends Controller
{
    public function index1():Page
    {
        $model = Test::getModel();
        $model->getConnection();
        $data = $model->getById(2);
        return $this->render('test',$data,'default','test title1');
    }

    public function index2():Page
    {
        $model = Test::getModel();
        $model->getConnection();
        $data = $model->getAll();
        return $this->render('test_many',$data,'default','test title2');
    }
}