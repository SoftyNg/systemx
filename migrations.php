<?php
/**
 * User: Systemx
 * Date: 7/10/2020
 * Time: 8:21 AM
 */

use systemx\SystemxCore\Systemx;

require_once __DIR__.'/vendor/autoload.php';
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = [
    'userClass' => \app\models\User::class,//change this to your user class
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Systemx(__DIR__, $config);

$app->db->applyMigrations();