<?php

namespace App\Repository;


/**
 * @method Recu|null find($id, $lockMode = null, $lockVersion = null)
 * @method Recu|null findOneBy(array $criteria, array $orderBy = null)
 * @method Recu[]    findAll()
 * @method Recu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecuRepository extends \Doctrine\ORM\EntityRepository
{
    public function findRecu($str,$event){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p
                FROM EventBundle:recu p
                WHERE p.User = :str AND p.event = :event'
            )
            ->setParameter('str', '%'.$str.'%')
            ->setParameter('event', '%'.$event.'%')

            ->getResult();
    }

    // /**
    //  * @return Recu[] Returns an array of Recu objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Recu
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
