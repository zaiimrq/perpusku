<?php 


namespace Perpus\Perpusku\Controllers;
use Perpus\Perpusku\Core\Controller;
use Perpus\Perpusku\Models\HomeModel;

class HomeController extends Controller
{
    public function index(): void
    {
        $data['books'] = self::model(HomeModel::class)->home($_GET['q'] ?? false);
        $data['title'] = 'Home';
        self::view('Home/index', $data);
    }
   
}