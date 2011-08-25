<?php
namespace ISpySi\WelcomeBundle\Entity;

class Art {
    protected $id;
    protected $name;
    protected $filename;
    protected $notes;
    protected $type_id;
    protected $media_id;
    protected $dateAdded;
    protected $dateCreated;    
    protected $artType;
    protected $mediaType;
    protected $featured;
    
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
     * Set filename
     *
     * @param string $filename
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set notes
     *
     * @param text $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * Get notes
     *
     * @return text 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set dateAdded
     *
     * @param date $dateAdded
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;
    }

    /**
     * Get dateAdded
     *
     * @return date 
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set dateCreated
     *
     * @param date $dateCreated
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * Get dateCreated
     *
     * @return date 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set artType
     *
     * @param ISpySi\WelcomeBundle\Entity\ArtType $artType
     */
    public function setArtType(\ISpySi\WelcomeBundle\Entity\ArtType $artType)
    {
        $this->artType = $artType;
    }

    /**
     * Get artType
     *
     * @return ISpySi\WelcomeBundle\Entity\ArtType 
     */
    public function getArtType()
    {
        return $this->artType;
    }

    /**
     * Set mediaType
     *
     * @param ISpySi\WelcomeBundle\Entity\MediaType $mediaType
     */
    public function setMediaType(\ISpySi\WelcomeBundle\Entity\MediaType $mediaType)
    {
        $this->mediaType = $mediaType;
    }

    /**
     * Get mediaType
     *
     * @return ISpySi\WelcomeBundle\Entity\MediaType 
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }
   
    /**
     * Set featured
     *
     * @param boolean $featured
     */
    public function setFeatured($featured)
    {
        $this->featured = $featured;
    }

    /**
     * Get featured
     *
     * @return boolean 
     */
    public function getFeatured()
    {
        return $this->featured;
    }
}