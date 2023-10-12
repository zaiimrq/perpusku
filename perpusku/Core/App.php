<?php 

namespace Perpus\Perpusku\Core;

use Perpus\Perpusku\Controllers\AdminDashboardController;
use Perpus\Perpusku\Controllers\AnggotaDashboardController;
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
        Route::add('POST', '/login', LoginController::class, 'login');
        Route::add('GET', '/logout', LoginController::class, 'logout');
        
        Route::add('GET', '/register', RegisterController::class, 'index');
        Route::add('POST', '/register', RegisterController::class, 'store');

        Route::add('GET', '/dashboard/anggota', AnggotaDashboardController::class, 'index');
        Route::add('GET', '/dashboard/admin', AdminDashboardController::class, 'index');
        Route::add('GET', '/dashboard', AdminDashboardController::class, 'dashboard');
        Route::add('GET', '/dashboard/admin/create', AdminDashboardController::class, 'create');
        Route::add('POST', '/dashboard/admin/create', AdminDashboardController::class, 'store');
        Route::add('POST', '/dashboard/admin/delete', AdminDashboardController::class, 'destroy');
        Route::add('GET', '/dashboard/admin/edit', AdminDashboardController::class, 'edit');
        Route::add('POST', '/dashboard/admin/edit', AdminDashboardController::class, 'update');
        
        Route::run();

    }
}