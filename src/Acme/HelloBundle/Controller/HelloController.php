<?php
namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller{
    
    public function indexAction($fname, $lname){
        return $this->render('AcmeHelloBundle:Hello:index.html.twig', array('fname' => $fname, 'lname' => $lname));
        
    }
}
?>
