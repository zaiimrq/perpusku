<?php 

namespace Perpus\Perpusku\Controllers;
use Perpus\Perpusku\Core\Controller;

class AnggotaDashboardController extends Controller
{
    public function index()
    {
        self::view('Dashboard/Anggota/index');
    }

}