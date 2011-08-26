<?php
namespace ISpySi\WelcomeBundle\Repository;

use Doctrine\ORM\EntityRepository;

class MediaTypeRepository extends EntityRepository {
    //uses the association mapping of mediaType and art media type
    /*public function findArtByMedia($type, $order){
        $mediaType = $this->find($type);
        return $mediaType->getArtWorks();
     }*/
     
     /*public function findArtByMedia($type, $order){
         $q = $this->createQueryBuilder('m')
                    ->where('m.name = :type')
                    ->setParameter('type', $type)
                    ->innerJoin('art', 'a')
                    ->where('a.artType = m.name')
                    ->orderBy('a.filename', 'ASC')
                    ->getQuery();
     }*/
}
?>
