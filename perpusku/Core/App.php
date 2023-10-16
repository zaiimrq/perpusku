<?php 

namespace Perpus\Perpusku\Core;

use Perpus\Perpusku\Controllers\AdminDashboardController;
use Perpus\Perpusku\Controllers\AnggotaDashboardController;
use Perpus\Perpusku\Controllers\BorrowedDashboardController;
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
        
        Route::add('GET', '/dashboard/anggota/profile', AnggotaDashboardController::class, 'profile');
        Route::add('POST', '/dashboard/anggota/profile/edit', AnggotaDashboardController::class, 'profile_update');

        Route::add('GET', '/check/verify', HomeController::class, 'check');
        Route::add('POST', '/dashboard/anggota/borrow', AnggotaDashboardController::class, 'borrow');

        Route::add('GET', '/dashboard/admin/borrow', BorrowedDashboardController::class, 'index');
        Route::add('GET', '/dashboard/admin/borrow/confirm', BorrowedDashboardController::class, 'confirm');

        
        Route::run();

    }
}