<?php

namespace App\Repository;

use App\Entity\Lunettes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Lunettes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lunettes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lunettes[]    findAll()
 * @method Lunettes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LunettesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lunettes::class);
    }

    // /**
    //  * @return Lunettes[] Returns an array of Lunettes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Lunettes
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
