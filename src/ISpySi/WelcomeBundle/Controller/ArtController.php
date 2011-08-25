<?php

namespace ISpySi\WelcomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\RedirectController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use ISpySi\WelcomeBundle\Entity\Art;
use ISpySi\WelcomeBundle\Entity\MediaType;
use ISpySi\WelcomeBundle\Entity\ArtType;


class ArtController extends Controller
{
  
    private function getEntityManager(){
        return $this->getDoctrine()->getEntityManager();
    }
    /*
     * index method for showing all art and filtering it
     * by media, type or ordering it by name or date created
     */
    
    public function artIndexAction($type = 1, $order = 'name'){
        $em = $this->getEntityManager();
        //$media, $type, $order
        $artWorks = $em->getRepository('ISpySiWelcomeBundle:Art')->findArt($type, $order);
        if($artWorks != null){
             return $this->render('ISpySiWelcomeBundle:Art:art.html.twig', array('artWorks' => $artWorks, 'artFolder' => 'compressed'));
        }
        else {
            return $this->forward('ISpySiWelcomeBundle:Default:error');
        }
    }
    
    //gets a certain number of random art works as defined in the database and passes to template
    /*---
    this is an action called rendered by a twig template which looks up some data, and then 
     * renders a twig file passing the data to it.
     * The twig file then loops through the data and shows it
     * so on the actual art page, a different number could be passed to get
     * more results out
    ---*/
    public function featuredArtAction($max = 3)
    {
        //get the art works 
        //$artWorks = array('simonkerr picture 1','simonkerr picture 2','simonkerr picture 3');
        
        //return $this->render('ISpySiWelcomeBundle:Art:featuredArt.html.twig', array('artWorks' => $artWorks));
        $em = $this->getEntityManager();
        $artWorks = $em->getRepository('ISpySiWelcomeBundle:Art')->findFeaturedArt();
        if($artWorks != null){
            return $this->render('ISpySiWelcomeBundle:Art:artList.html.twig', array('artWorks' => $artWorks, 'artFolder' => 'featured'));
        }
        else {
            return $this->forward('ISpySiWelcomeBundle:Default:error');
        }
        
        
    }
    
    public function createAction(){
        //doing this will create a new media type and art type in the database
        //and link the new art work to it
        /*$mediaType = new MediaType();
        $mediaType->setName('Acrylic');
        $artType = new ArtType();
        $artType->setName('Painting');*/
        
        
        $art = new Art();
        $art->setName('new art');
        $art->setFilename('newArt.jpg');
        $art->setNotes('some notes about this');
        //relate the art to the media table
        //$art->setMediaType(1);
        //$art->setArtType(1);       
              
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($art);
        //$em->persist($mediaType);
        //$em->persist($artType);       
        $em->flush();
        
        return new Response('Created art id: ' . $art->getId() . ': ' . $art->getName());
        
    }
    
    public function showAction($id){
        $art = $this->getDoctrine()
                ->getRepository('ISpySiWelcomeBundle:Art')
                ->find($id);
        
        if(!$art){
            throw $this->createNotFoundException('No art found');
        }else{
            return new Response('title of id:  ' . $id);
        }
        
    }
    
    public function showArtAction($id){
        $mediaType = $this->getDoctrine()->getRepository('ISpySiWelcomeBundle:MediaType')
                ->find($id);
        
        $artWorks = $mediaType->getArtWorks();
        
        $r = "";
        /*foreach ($artWorks as $artWork) {
            $r .= '<p>art name :' . $artWork . '</p>';
        }*/
        
        //return new Response('its' . $artWorks);
        
    }
    
    /*
     * uses dql (doctrine query language) 
     * to find all rows in 'art' table 
     * with a media type id of 3 (acrylic)
     */
    public function allPaintingsAction(){
        /*$em = $this->getDoctrine()->getEntityManager();
        $q = $em->createQuery(
                'SELECT a FROM ISpySiWelcomeBundle:Art a WHERE a.mediaType_id = :mediaType ORDER BY a.filename'
                )
                ->setParameter('mediaType', '3');
        $artWorks = $q->getResult();*/
        
        
        //alternatively, the querybuilder class can be used to do the same thing
        $repo = $this->getDoctrine()->getRepository('ISpySiWelcomeBundle:Art');
        $q = $repo->createQueryBuilder('a')
                ->where('a.mediaType_id = :mediaType')
                ->setParameter('mediaType', '3')
                ->orderBy('a.filename', 'ASC')
                ->getQuery();
        
        $artWorks = $q->getResult();
        
        
    }
    
    /*
     * by creating a repository class, all the methods for querying the database can
     * be deferred to there, leaving the controller free to just perform logic
     * between views and the data
     */
    public function allArtOrderedByName(){
        //findAllOrderedByName is a method of the repository class ArtRepository
        $em = $this->getDoctrine()->getEntityManager();
        $artWorks = $em->getRepository('ISpySiWelcomeBundle:Art')
                ->findAllOrderedByName();
    }
    
}


?>
