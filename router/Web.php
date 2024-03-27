<?php
namespace Router;

use Core\Route;
use App\Http\Controllers\TestController;

 class Web
{
    public function __construct()
    {

    Route::get('/',[TestController::class,'index']);
    
    }
}
