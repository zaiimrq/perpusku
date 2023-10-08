<?php 

namespace Perpus\Perpusku\Core;

use Perpus\Perpusku\Core\Route;
use Perpus\Perpusku\Controllers\HomeController;
use Perpus\Perpusku\Controllers\LoginController;
use Perpus\Perpusku\Controllers\RegisterController;

class App
{
    public function __construct()
    {
        Route::add('GET', '/', HomeController::class, 'index');
        Route::add('GET', '/login', LoginController::class, 'index');
        Route::add('GET', '/register', RegisterController::class, 'index');
        Route::add('POST', '/register', RegisterController::class, 'store');
        
        Route::run();
    }
}