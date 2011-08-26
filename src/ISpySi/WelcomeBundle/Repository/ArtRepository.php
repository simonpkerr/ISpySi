<?php

namespace ISpySi\WelcomeBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ArtRepository extends EntityRepository {

    public function findFeaturedArt() {
        //get featured art
        $artWorks = $this->createQueryBuilder('a')
                ->where('a.featured = :featured')
                ->setParameter('featured', '1')
                ->getQuery()
                ->getResult();
       
        //not working properly
        if (count($artWorks) == 0) {
            $artWorks = $this->createQueryBuilder('a')
                    ->setMaxResults(4)
                    ->orderBy('RANDOM()')
                    ->getQuery()
                    ->getMaxResults();
            
        }
        return $artWorks;
    }
    
    public function findArt($type, $order){
        $q = $this->createQueryBuilder('a')
                ->where('a.mediaType_id = :type')
                ->setParameter('type', $type)
                ->addOrderBy('a.'. $order, 'ASC')
                ->getQuery();
        
        return $q->getResult();
    }

    /* public function findAllOrderedByName(){
      return $this->getEntityManager()
      ->createQuery('SELECT a FROM ISpySiWelcomeBundle:Art a ORDER BY a.filename ASC')
      ->getResult();
      } */
}