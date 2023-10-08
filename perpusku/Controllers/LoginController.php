<?php 

namespace Perpus\Perpusku\Controllers;
use Perpus\Perpusku\Core\Controller;

class LoginController extends Controller
{
    public function index()
    {
        $data['title'] = 'Login';
        $this->view('Home/login', $data);
    }
}