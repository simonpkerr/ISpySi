<?php

namespace ISpySi\WelcomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('ISpySiWelcomeBundle:Default:index.html.twig');
    }
    
    public function errorAction(){
        return $this->render('ISpySiWelcomeBundle:Default:error.html.twig');
    }

}


?>