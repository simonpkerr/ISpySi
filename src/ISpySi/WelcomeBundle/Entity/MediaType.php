<?php

namespace ISpySi\WelcomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * ISpySi\WelcomeBundle\Entity\MediaType
 */
class MediaType
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;
    
    protected $artWorks;
    
    public function __construct(){
        $this->artWorks = new ArrayCollection();
    }

    public function getArtWorks(){
        return $this->artWorks;
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add artWorks
     *
     * @param ISpySi\WelcomeBundle\Entity\Art $artWorks
     */
    public function addArtWorks(\ISpySi\WelcomeBundle\Entity\Art $artWorks)
    {
        $this->artWorks[] = $artWorks;
    }
}