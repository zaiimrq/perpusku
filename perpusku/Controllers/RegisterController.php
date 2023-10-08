<?php 

namespace Perpus\Perpusku\Controllers;
use Perpus\Perpusku\Core\Controller;
use Perpus\Perpusku\Core\Flasher;
use Perpus\Perpusku\Models\HomeModel;


class RegisterController extends Controller
{
    public function index(): void
    {
        $data['title'] = 'Register';
        self::view('Home/register', $data);
    }
    
    public function store()
    {
        // self::model(HomeModel::class)->register($_POST);
        if (self::model(HomeModel::class)->register($_POST))
        {
            header("Location: ". BASEURL ."/login");
            Flasher::setFlash('Success !', 'Berhasil Membuat Akun Silahkan Login', 'success', 'login');
            exit;
        } else {
            header("Location: ". BASEURL ."/register");
            Flasher::setFlash('Warning !', 'Email Sudah Terdaftar Silahkan Login', 'warning', 'register');
            exit;
        }
    }
}