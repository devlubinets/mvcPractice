<?php

namespace Project\Controllers;

use Core\Controller;
use Core\Page;
use Project\Models\Test;

class TestController extends Controller
{
    public function index():Page
    {
        $model = Test::getModel();
        $model->getConnection();
        $data = $model->getById(1);
        echo '<br>'."Hi I am <b>" . __CLASS__ . "</b> and action's name <b>" . __METHOD__.'</b>';
        return $this->render('test',$data,'default','test title');
    }
}