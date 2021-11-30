<?php

namespace Project\Controllers;

use Core\Controller;

class TestController extends Controller
{
    public function index($params)
    {
        echo '<br>'."${params['var1']} and ${params['var2']}";
    }
}