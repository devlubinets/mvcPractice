<?php

namespace Project\Controllers;

use Core\Controller;
use Core\Page;

class TestController extends Controller
{
    public function index():Page
    {
        echo '<br>'."Hi I am <b>" . __CLASS__ . "</b> and action's name <b>" . __METHOD__.'</b>';
        return $this->render('test',['test_var' => 'test var'],'default','test title');
    }
}