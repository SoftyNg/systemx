<?php
/**
 * User: Systemx
 * Date: Date: 11/11/2022
 * Time: 8:43 AM
 */

namespace app\controllers;


use systemx\SystemxCore\Application;
use systemx\SystemxCore\Controller;
use systemx\SystemxCore\middlewares\AuthMiddleware;
use systemx\SystemxCore\Request;
use systemx\SystemxCore\Response;

/**
 * Class MyController
 *
 * @author  Lawrence John <thelaw111@gmail.com>
 * @package app\controllers
 */
class MyController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public function home()
    {
        return $this->render('home', [
            'name' => 'Systemx'
        ]);
    }

    
}
