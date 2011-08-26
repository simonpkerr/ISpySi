<?php

namespace ISpySi\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMS\SecurityExtraBundle\Annotation\Secure;

class AdminController extends Controller
{
    /**
     * @Secure(roles="ROLE_ADMIN")
     */
    public function indexAction()
    {
        return $this->render('ISpySiAdminBundle:Admin:index.html.twig');
    }
}
