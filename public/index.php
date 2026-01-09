<?php
/**
 * User: Systemx
 * Date: 11/11/2022
 * Time: 9:57 AM
 */
use systemx\SystemxCore\Systemx;

require_once __DIR__ . '/../vendor/autoload.php';

// Load Constants (defines global variables)
require_once __DIR__ . '/../constant/site_owner.php';

// Load Usable functions
require_once __DIR__ . '/../helpers/functions.php';

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
require_once __DIR__ . '/../constant/config.php';


$app = new Systemx(dirname(__DIR__), $config);


// Load Routes (Passing the $app instance to the file)
require_once __DIR__ . '/../routes/web.php';


$app->run();
