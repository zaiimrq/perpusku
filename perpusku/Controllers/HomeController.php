<?php 


namespace Perpus\Perpusku\Controllers;
use Perpus\Perpusku\Core\Controller;
use Perpus\Perpusku\Models\HomeModel;

class HomeController extends Controller
{
    public function index(): void
    {
        $filter = [
            'q' => $_GET['q'] ?? false,
            'c' => $_GET['c'] ?? false
        ];

        $data['books'] = self::model(HomeModel::class)->home($filter ?? false);
        $data['title'] = 'Home';
        self::view('Home/index', $data);
    }

    public function check()
    {
        $status = [
            'auth' => false,
            'anggota' => false,
            'admin' => false,
            'book' => null
        ];

        if (isset($_SESSION['auth'])) $status['auth'] = true;
        if (isset($_SESSION['auth']['admin'])) $status['admin'] = true;
        if (isset($_SESSION['auth']['anggota']))
        {
            $status['anggota'] = true;
            $status['book'] = self::model(HomeModel::class)->getBook($_GET['id']);
        }

        echo json_encode($status);
    }
   
}