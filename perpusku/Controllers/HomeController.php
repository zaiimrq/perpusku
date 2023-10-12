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
   
}