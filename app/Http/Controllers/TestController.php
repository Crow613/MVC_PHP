<?php

namespace App\Http\Controllers;

use Core\Response;

class TestController 
{
    public function index()
    {
        Response::view('blog');
    }
}