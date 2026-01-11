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

require_once __DIR__ . '/constant/config.php';
$app = new Systemx(__DIR__, $config);

// Check if you typed 'rollback' in the terminal
if (isset($argv[1]) && $argv[1] === 'rollback') {
    $app->db->rollbackMigrations();
} else {
    $app->db->applyMigrations();
}