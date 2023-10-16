<?php 

namespace Perpus\Perpusku\Controllers;
use Perpus\Perpusku\Core\Controller;
use Perpus\Perpusku\Core\Gate;
use Perpus\Perpusku\Models\BorrowAdminModel;

class BorrowedDashboardController extends Controller
{
    public function index()
    {

        Gate::admin();

        $data['title'] = 'Borrowed Book';
        $data['borrow'] = self::model(BorrowAdminModel::class)->index();
        $this->view('Dashboard/Admin/Borrow/index', $data);
    }

    public function confirm()
    {
        Gate::admin();

        $data = self::model(BorrowAdminModel::class)->confirm($_GET);
        echo json_encode($data);
    }
}