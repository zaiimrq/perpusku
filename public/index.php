<?php 

if (!session_id()) session_start();

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../perpusku/Config/Config.php';

use Perpus\Perpusku\Core\App;

new App;