<?php 

namespace Perpus\Perpusku\Core;


class Controller
{
    public static function view($view, array $data = [])
    {
        require_once __DIR__ . '/../Views/' . $view . '.php';
    }

    public static function model($model)
    {
        return new $model;
    }

}