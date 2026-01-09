<?php
/** @var $app \systemx\SystemxCore\Systemx */

use app\controllers\Welcome;
$app->router->get('/', [Welcome::class, 'home']);