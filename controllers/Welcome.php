<?php
/**
 * User: Systemx
 * Date: Date: 11/11/2022
 * Time: 8:43 AM
 */

namespace app\controllers;


use systemx\SystemxCore\Application;
use systemx\SystemxCore\Controller;
use systemx\SystemxCore\Request;
use systemx\SystemxCore\Response;

/**
 * Class Welcome
 *
 * @author  Lawrence John <thelaw111@gmail.com>
 * @package app\controllers
 */
class Welcome extends Controller
{
 
    public function home()
    {
        return $this->render('home', [
            'name' => 'Systemx'
        ]);
    }

    
}
