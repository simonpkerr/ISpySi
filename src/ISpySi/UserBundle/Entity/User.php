<?php

namespace ISpySi\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/*
 * @ORM/Entity
 */
class User implements UserInterface
{
    
    /*
     * @ORM\Column(type="string", length="255")
     */   
    protected $username;
}

?>
