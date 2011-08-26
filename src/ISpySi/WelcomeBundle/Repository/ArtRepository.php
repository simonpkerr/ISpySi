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
                //->select('a', 'm.name')
                //->from('art', 'a')
                //->innerJoin('a', 'mediaType_id', 'm', 'm.id = :type')
                ->where('a.mediaType_id = :type')
                ->setParameter('type', $type)
                
                ->orderBy('a.filename', 'ASC')
                //->setParameter('order', $order)                
                ->getQuery();
        
        /*$q = $this->createQueryBuilder()
                ->select('a', 'm')
                ->from('art', 'media')
                ->leftJoin('a', 'mediaType', 'm', 'a.mediaType = m.name')
                ->in
                ->where('m.id = :type')
                ->setParameter('type', $type)
                ->getQuery();*/
        
        /*$qb = $this->createQueryBuilder()
                ->select('u.name')
                ->from('users', 'u')
                ->innerJoin('u', 'phonenumbers', 'p', 'p.is_primary = 1');*/
                
        /*$qb = $this->createQueryBuilder()
                ->select('a')
                ->from('art', 'a')
                //->innerJoin('a', 'mediaType', 'm', 'm.id = :type')
                ->innerJoin('a.mediaType', 'm', 'ON', 'm.id = :type')
                ->setParameter('type', $type)
                ->getQuery();
             */   
        
        return $q->getResult();
    }

    /* public function findAllOrderedByName(){
      return $this->getEntityManager()
      ->createQuery('SELECT a FROM ISpySiWelcomeBundle:Art a ORDER BY a.filename ASC')
      ->getResult();
      } */
}