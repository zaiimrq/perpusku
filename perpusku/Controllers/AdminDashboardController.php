<?php 

namespace Perpus\Perpusku\Controllers;
use Perpus\Perpusku\Core\Controller;
use Perpus\Perpusku\Models\AdminModel;

class AdminDashboardController extends Controller
{
   
    public function dashboard()
    {
        if(isset($_SESSION['auth']['admin'])) header("Location: ". BASEURL . "/dashboard/admin");
        exit;

        if(isset($_SESSION['auth']['anggota'])) header("Location: ". BASEURL . "/dashboard/anggota");
        exit;
    }

    public function index()
    {
        $data = self::model(AdminModel::class)->count();
        self::view('Dashboard/Admin/index', $data);
    }
}