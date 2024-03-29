<?php
/**
 * User: Systemx
 * Date: 11/11/2022
 * Time: 9:57 AM
 */



use app\controllers\Welcome;
use systemx\SystemxCore\Systemx;

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
$config = [
    'userClass' => \app\models\User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Systemx(dirname(__DIR__), $config);



$app->router->get('/', [Welcome::class, 'home']);


$app->run();
