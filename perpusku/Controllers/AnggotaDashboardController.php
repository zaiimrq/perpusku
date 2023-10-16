<?php 

namespace Perpus\Perpusku\Controllers;
use Perpus\Perpusku\Core\Gate;
use Perpus\Perpusku\Core\Controller;
use Perpus\Perpusku\Core\Flasher;
use Perpus\Perpusku\Models\AnggotaModel;

class AnggotaDashboardController extends Controller
{

    public function profile()
    {
        Gate::anggota();

        $data['title'] = 'Profile';
        $data['user'] = self::model(AnggotaModel::class)->profile();
        self::view('Dashboard/Anggota/profile', $data);
      
    }
    public function index()
    {
        Gate::anggota();

        $data['title'] = 'Dashboard';
        $data['data'] = self::model(AnggotaModel::class)->get_sum_borrow();
        $data['borrow'] = self::model(AnggotaModel::class)->get_borrow();
        
        self::view('Dashboard/Anggota/index', $data);
    }

    public function profile_update()
    {
        Gate::anggota();

        if(self::model(AnggotaModel::class)->profile_update($_POST, $_FILES))
        {
            Flasher::setFlash('Success', 'Profile Has Been Updated !', 'success', 'anggota/profile');
            header('Location: '. BASEURL . '/dashboard/anggota/profile');
            exit;
        } else if(self::model(AnggotaModel::class)->profile_update($_POST, $_FILES) == 0) {
            Flasher::setFlash('Warning', 'No Data Has Been Changed !', 'warning', 'anggota/profile');
            header('Location: '. BASEURL . '/dashboard/anggota/profile');
            exit;
        }
    }

    public function borrow()
    {
        if(self::model(AnggotaModel::class)->borrow($_POST) > 0)
        {
            Flasher::setFlash('Success', $_POST['jumlah']. ' Book On Proses, Please Wait Until Your Book Approved By Admin', 'success', 'anggota/index');
            header('Location: '. BASEURL );
            exit;
        }
    }

}