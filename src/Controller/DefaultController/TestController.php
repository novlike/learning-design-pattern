<?php
/**
 * Created by PhpStorm.
 * User: hlecouey
 * Date: 14/11/2018
 * Time: 09:49
 */

namespace App\Controller\DefaultController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
    /**
     * @Route("/index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        return $this->render('default/index.html.twig');
    }
}
