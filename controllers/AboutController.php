<?php
/**
 * User: Systemx
 * Date: 11/11/2022
 * Time: 8:56 AM
 */

namespace app\controllers;


use systemx\SystemxCore\Controller;

/**
 * Class AboutController
 *
 * @author  Lawrence John <thelaw111@gimail.com>
 * @package app\controllers
 */
class AboutController extends Controller
{
    public function index()
    {
        return $this->render('about');
    }
}