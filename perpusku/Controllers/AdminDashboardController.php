<?php 

namespace Perpus\Perpusku\Controllers;
use Perpus\Perpusku\Core\Controller;


class AdminDashboardController extends Controller
{
    public function index()
    {
        self::view('Dashboard/Admin/index');
    }

    public function dashboard()
    {
        if(isset($_SESSION['auth']['admin'])) header("Location: ". BASEURL . "/dashboard/admin");
        exit;

        if(isset($_SESSION['auth']['anggota'])) header("Location: ". BASEURL . "/dashboard/anggota");
        exit;
    }
}