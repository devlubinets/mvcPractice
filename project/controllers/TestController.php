<?php

namespace Project\Controllers;

use Core\Controller;

class TestController extends Controller
{
    public function index()
    {
        echo '<br>'."Hi I am" . __CLASS__ . "and action's name" . __METHOD__;
    }
}