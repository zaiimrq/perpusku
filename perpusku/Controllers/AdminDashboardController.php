<?php 

namespace Perpus\Perpusku\Controllers;
use Perpus\Perpusku\Core\Controller;
use Perpus\Perpusku\Core\Flasher;
use Perpus\Perpusku\Models\AdminModel;

class AdminDashboardController extends Controller
{
   
    public function dashboard()
    {
        // var_dump($_SESSION['auth']['admin']);
        if(isset($_SESSION['auth']['admin'])) {
            header("Location: ". BASEURL . "/dashboard/admin");
            exit;
        } elseif(isset($_SESSION['auth']['anggota'])) {
            header("Location: ". BASEURL . "/dashboard/anggota");
            exit;
        }
    }

    public function index()
    {
        $data = self::model(AdminModel::class)->count();
        $data['title'] = 'Dashboard';
        self::view('Dashboard/Admin/index', $data);
    }

    public function create()
    {
        $data['title'] = 'New Book';
        self::view('Dashboard/Admin/create', $data);
    }

    public function store()
    {   
        $status = self::model(AdminModel::class)->store($_POST);

        if ($status > 0) {

            Flasher::setFlash('Success', 'New Book Has Been Added !', 'success', 'dashboard/admin');
            header('Location: '. BASEURL . '/dashboard/admin');
            exit;
        }
    }

    public function destroy()
    {
        $status = self::model(AdminModel::class)->destroy($_POST['id']);

        if ($status > 0) {

            Flasher::setFlash('Success', 'A Book Has Been deleted !', 'success', 'dashboard/admin');
            header('Location: '. BASEURL . '/dashboard/admin');
            exit;
        }
    }

    public function edit()
    {
        $data['buku'] = self::model(AdminModel::class)->edit($_GET['id']);
        $data['title'] = 'Edit Book';
        self::view('Dashboard/Admin/edit', $data);
    }

    public function update()
    {
        $status = self::model(AdminModel::class)->update($_POST);

        if ($status > 0) {

            Flasher::setFlash('Success', 'A Book Has Been updated !', 'success', 'dashboard/admin');
            header('Location: '. BASEURL . '/dashboard/admin');
            exit;
        }
    }
}