<?php

namespace Perpus\Perpusku\Core;

class Flasher
{
    public static function setFlash(string $status, string $message, string $style, string $name)
    {
        $_SESSION['flash'][$name] = [
            'status' => $status,
            'message' => $message,
            'style' => $style
        ];
    }

    public static function flash($name)
    {
        if (isset($_SESSION['flash'][$name])) {
            echo '
                <div class="alert alert-'. $_SESSION['flash'][$name]['style'] .' alert-dismissible fade show" role="alert">
                    <strong>'. $_SESSION['flash'][$name]['status'] .'</strong> '. $_SESSION['flash'][$name]['message'] .'
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ';

            unset($_SESSION['flash']);
        }
    }
}
