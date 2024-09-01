<?php

namespace App\Http\Controllers;

use Core\View;
use Core\Request;


use Core\shablonisator\Methods;
use function PHPUnit\Framework\callback;

class TestController extends Controllers
{
    public function index()
    {


        return view('test', ['title' => 'blogs',]);

    }
    public function email()
    {
        dd(method('PUT'));
    }
}