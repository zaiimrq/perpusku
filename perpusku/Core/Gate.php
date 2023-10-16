<?php 

namespace Perpus\Perpusku\Core;

use Perpus\Perpusku\Core\Controller;


class Gate extends Controller
{
    public static function auth(): void
    {
        if (empty($_SESSION['auth'])) {
            self::view('Error/404');
            exit;
        }

        return;
    }
    public static function admin(): void
    {
        if (empty($_SESSION['auth']['admin'])) {
            self::view('Error/404');
            exit;
        }

        return;
    }
    public static function anggota(): void
    {
        if (empty($_SESSION['auth']['anggota'])) {
            self::view('Error/404');
            exit;
        }

        return;
    }
}