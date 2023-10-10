<?php 

namespace Perpus\Perpusku\Controllers;
use Perpus\Perpusku\Core\Controller;
use Perpus\Perpusku\Core\Flasher;
use Perpus\Perpusku\Models\HomeModel;

class LoginController extends Controller
{
    public function index()
    {
        if (isset($_SESSION['auth']['anggota'])) {  
            header("Location: ". BASEURL . "/dashboard/anggota");
            exit;
        } elseif (isset($_SESSION['auth']['admin'])) {  
            header("Location: ". BASEURL . "/dashboard/admin");
            exit;
        }

        $data['title'] = 'Login';
        $this->view('Home/login', $data);
    }

    public function login()
    {
        $data = self::model(HomeModel::class)->login($_POST);

        if (!$data) {
            Flasher::setFlash('Gagal', 'Email Atau Password Salah !', 'danger', 'login');
            header('Location: '. BASEURL . '/login');
            exit;
        }

        if ($data['auth'] && !($data['data']['is_admin'])) {
            $_SESSION['auth']['anggota'] = true;
            $_SESSION['verify'] = $data['data'];
            header("Location: ". BASEURL . "/dashboard/anggota");
            exit;            
        }
    
        if ($data['auth'] && $data['data']['is_admin']) {
            $_SESSION['auth']['admin'] = true;
            header("Location: ". BASEURL . "/dashboard/admin");
            exit;
        }

    }

    public function logout()
    {
        session_destroy();
        session_unset();
        unset($_SESSION);

        header("Location: ". BASEURL);
        exit;
    }
}